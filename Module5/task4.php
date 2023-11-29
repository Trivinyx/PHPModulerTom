<?php 

require_once 'encryption_decryption.php';
// Define variables
$encrypt_state = $_POST["state"] ?? true;
$encryption_key = 'JallaHei';

$input = isset($_POST['input']) ? clean($_POST['input']) : '';
$output = null;



if (isset($_POST['action'])) {

    // Read what action was used
    if (strcmp($_POST['action'], 'Roter') === 0) {

        // Rotate action status
        $encrypt_state = !$encrypt_state;

        // Rotate input and output
        $input = isset($_POST['output']) ? clean($_POST['output']) : '';


        //$output = isset($_POST['input']) ? clean($_POST['input']) : '';
    } elseif (
        strcmp($_POST['action'], 'Krypter') === 0 ||
        strcmp($_POST['action'], 'Dekrypter') === 0
    ) {

        if ($encrypt_state == true) {
            // Encrypt the input and set result as output.
            $output = encryptStringToFumble($input, $encryption_key);
        } else {
            // Decrypt the input and set result as output.
            $output = decryptFumbleToString($input, $encryption_key);
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/module5.css">
    <title>module4</title>
</head>
<body>
    <div id="HeaderBar">
        <div id="homebutton">
            <a class="navButton" href="../index.php">Home</a>
            <a class="navButton" href="module5.php">Module 4 Hub</a>
        </div>
        <div id="Title">
            <h1>Module5</h1>
        </div>
    </div>
    <div class="mainContainer">
        <div id="titleBar">
            <div id="previous">
                <!-- disable link-->
                <a class="button" href="" type=>forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 4</h2>
            </div>
            <div id="next">
                <a class="button" href="task5.php">neste</a>
            </div>
        </div>
        <div id="card">
            <form method="post" class="form">
                <label for="input"><?= $encrypt_state ? 'Ren' : 'Kryptert'; ?> tekst</label>
                <textarea class="spacing_below" name="input" id="input" placeholder="Skriv tekst her"><?= $input ?></textarea>

                <div class="form_buttons spacing_below">
                    <input class="button big" type="submit" name="action" value="<?= $encrypt_state ? 'Krypter' : 'Dekrypter'; ?>">
                    <input class="button smol" type="submit" name="action" value="Roter">
                </div>

                <input type="hidden" id="output" name="output" value="<?= clean($output ?? '') ?>">
                <input type="hidden" id="state" name="state" value="<?= $encrypt_state ?>">
            </form>

            <div id="output_container">
                <div><?= $encrypt_state ? 'Kryptert' : 'Ren'; ?> tekst</div>
                <div id="output_box"><?= $output ?? '<span style="color: #777;">Aa</span>'?></div>
            </div>
        </div>

    </div>
</body>