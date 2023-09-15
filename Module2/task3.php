<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/module2.css">
    <title>Module1</title>
</head>
<body>
    <div id="HeaderBar">
        <div id="homebutton">
            <a class="navButton" href="../index.php">Home</a>
            <a class="navButton" href="module2.php">Module 2 Hub</a>
        </div>
        <div id="Title">
            <h1>Module2</h1>
        </div>
    </div>
    <div class="mainContainer">
        <div id="titleBar">
            <div id="previous">
                <a class="button" href="task2.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 3</h2>
            </div>
            <div id="next">
                <a class="button" href="task4.php">neste</a>
            </div>
        </div>
        <?php
            $email = "Aa@gmail.com";
            if($_POST) {
                $email = trim(strip_tags($_POST['email']));
            }
        ?>
        
        <p>
            <form method="post">
                <label for="email">E-post:</label>
                <?php echo "<input type='text' id='email' name='email' value='$email'>"; ?>
                <input type="submit" value="Submit"><br>
            </form> 
        </p>
        
        <p>
            <?php
                $err = validering($email);

                if(filter_var($email, FILTER_VALIDATE_EMAIL) && $err == "") { 
                    echo '
                    <div class="respons" style="color: #00bb00 ;">
                        <strong>Eposten er godkjent.</strong><br>
                    </div>';
                } else {
                    echo '
                    <div class="respons" style="color: #ff0000 ;">
                        <strong>Eposten er ikke godkjent</strong><br>
                        '.$err.'
                    </div>';
                }


                function validering($input) {
                    $err = "";

                    if(!str_contains($input, "@")) { return 'Email må inneholde "@".'; }
                    if(!preg_match("/^[a-zA-Z-' ]/",strstr($input, '@', true))) { return 'Bare bokstaver er tillatt i begynnelsen av eposten. Mellomrom er ikke tillatt.'; }
                    if(!(strlen(strstr(strstr($input, '@'), '.', true)) > 2)) { return 'Email må inneholde "@" etterfulgt av et domene på mer enn ett tegn.'; }
                    
                    return $err;
                }
            ?>
        </p>
    </div>
</body>