<?php

/**
 * Cleans strings from tags and html code
 * 
 * @param string $var String to be cleaned
 * @return string Clean string
 */ 
function clean(string $var):string
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

/**
 * Generates a string with reapeat of key until the given length is reached 
 * 
 * @param string $input key to repeat
 * @param int $length The length of the key
 * @return string Key-string
 */
function genKeyString(string $input, int $length): string
{
    $return_str = '';

    // Check input, and return if no value to work with
    if (strlen($input) <= 0 || $length <= 0) {
        return $return_str;
    }

    // Add an instance of the input until the key-string is past the given length
    while (strlen($return_str) < $length) {
        $return_str .= $input;
    }

    // Cut the key-string to the given length and return
    return substr($return_str, 0, $length);
}


/**
 * Encrypts a string of clear text into an extended, displaced string of characters. 
 * Takes in a key string for displacement-values.
 * 
 * @param string $input String to encrypt
 * @param string $key Displacement key
 * @return string Encrypted string, or error on failure
 */
function encryptStringToFumble(string $input, string $key): string
{
    if (strlen($input) <= 0) {
        return '<span class="error_msg">*Ingen tekst gitt*</span>';
    }

    $chars = array();

    // Convert input to array of hex value
    $hex = (bin2hex(mb_convert_encoding($input, 'UTF-16', 'UTF-8')));
    $hex_list = str_split($hex);
    
    // Generate key based on input-length
    $key = str_split(genKeyString($key, sizeof($hex_list)));

    // Convert input to value and displace values
    for ($i = 0; $i < sizeof($hex_list); $i++) {
        // Convert char to number
        $key_val = (ord($key[$i]) - 64);
        $calc_char_val = ord($hex_list[$i]) + (2 * $key_val);

        // Ensure value stays between 122 and 48 in case of overflow
        while ($calc_char_val > 122) {
            $calc_char_val = $calc_char_val - 68;
        }

        // Convert number into char
        $val = chr($calc_char_val);

        // Store value in array
        $chars[] = $val;
    }

    // Returned imploded string from char-array
    return implode($chars);
}

/**
 * Decrypts a string into clear text.
 * Takes in a key string for displacement-values.
 * 
 * @param string $input String to decrypt
 * @param string $key Displacement key
 * @return string Decrypted string, or error on failure
 */
function decryptFumbleToString(string $input, string $key): string
{
    // Define variables
    $chars = str_split($input);
    $hex_list = array();

    // Generate key based on input-length
    $key = str_split(genKeyString($key, strlen($input)));

    // Convert input no number and displace values in reverse
    for ($i = 0; $i < strlen($input); $i++) {
        // Convert char to number
        $key_val = (ord($key[$i]) - 64);
        $calc_char_val = ord($chars[$i]) - (2 * $key_val);

        // Ensure value stays between 122 and 48 in case of overflow
        while ($calc_char_val < 48) {
            $calc_char_val = $calc_char_val + 68;
        }

        // Convert number into char
        $val = chr($calc_char_val);

        // Store value in array
        $hex_list[] = $val;
    }

    // Return error if value is not recognized as hex 
    if (!ctype_xdigit(implode($hex_list))) {
        return '<span class="error_msg">*En feil ble funnet i teksen*</span>';
    }

    // Convert hex values back to binary, before converting encoding back to utf-8
    $return_str = (mb_convert_encoding(hex2bin(implode($hex_list)), 'UTF-8', 'UTF-16'));
    
    // Returned imploded and reversed string from char-array
    return $return_str;
}