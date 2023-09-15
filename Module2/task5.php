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
                <a class="button" href="task4.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 5</h2>
            </div>
            <div id="next">
                <a class="button" href="">neste</a>
            </div>
        </div>
        <?php
            function random_str(
                $length,
                $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
            ) {
                $str = '';
                $max = mb_strlen($keyspace, '8bit') - 1;
                if ($max < 1) {
                    throw new Exception('$keyspace must be at least two characters long');
                }
                for ($i = 0; $i < $length; ++$i) {
                    $str .= $keyspace[random_int(0, $max)];
                }
                return $str;
            }
            function validate(string $input):bool{
                if(!preg_match('/[0-9]/',$input)){return false;}
                if(!preg_match('/[a-z]/',$input)){return false;}
                if(!preg_match('/[A-Z]/',$input)){return false;}
                return true;
            }
            function generatePass():string{
                $pass = "";
                $sucsess = false;
                while(!$sucsess){
                    $pass = random_str(8);
                    $sucsess = validate($pass);
                }
                return $pass;
            }
            $generatedPassword = generatePass();
            echo "<p> Generert passord:<br> $generatedPassword </p>"
        ?>
        <p>
            <button onclick="window.location.reload(true);">
                Regenerer passord
            </button>
        </p>
    </div>
</body>