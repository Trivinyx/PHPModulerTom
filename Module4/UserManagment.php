<?php 
    //pure php code
    //Arrey to hold $name = $email = $phone = $address = "", in client between pages side
    $namePattern = "/^[a-zA-Z ]*$/";
    $emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
    $phonePattern = "/^[0-9]{8}$/";
    $addressPattern = "/^[a-zA-Z0-9 ]*$/";
    $user = array(
        "name" => "",
        "email" => "",
        "phone" => "",
        "address" => ""
    );

    //User Validation
    

    //test input function
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data); //converts special characters to HTML entities
        $data = strip_tags($data); //strip tags
        return $data;
    }

    //Recive the validated post data from task2.php and save
    //function to save user arrey data to local arrey
    function saveUser($userIn) {
        //check if user is array
        if (!is_array($userIn)) {
            return false;
        }
        //save user arrey data to local arrey
        $user = $userIn;
        return $user;
    }

    //get user arrey data from local arrey
    function getUser() {
        global $user;
        return $user;
    }

?>