<?php
    $grad = $_POST['degree'] ?? 10;
    $type = $_POST['type'] ?? 'celsius';
    $fahr_select = '';
    $result = '-';

    if(isset($_POST['degree'])) {
        if(strcmp($type, 'celsius') === 0) {
            // Konvertering fra C til F
            $calc = ($grad * 1.8) + 32;

            // Kalkulert resultat i fahrenheit
            $result = number_format((float)$calc, 2, '.', '') . "°F";

        } elseif (strcmp($type, 'fahrenheit') === 0) {
            // Konvertering fra F til C
            $calc = ($grad - 32) / 1.8;

            // Vis fahrenheit som valgt
            $fahr_select = 'selected';

            // Kalkulert resultat i celsius
            $result = number_format((float)$calc, 2, '.', '') . "°C";
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
                <a class="button" href="task4.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 5</h2>
            </div>
            <div id="next">
                <a class="button" href="">neste</a>
            </div>
        </div>
        <div id="card">
            <form method="post" class="form">
                <label for="degree">Grad</label>
                <input type="number" id="degree" name="degree" value="<?= $grad ?>">
                
                <label for="type">Måling</label>
                <select name="type" id="type">
                    <option value="celsius">celsius</option>
                    <option value="fahrenheit" <?= $fahr_select ?>>fahrenheit</option>
                </select>
                <span></span>
                <input type="submit" name="sent" value="Konverter">
            </form>

            <div id='result'>
                <div class='label'>Resultat</div>
                <div class='result_text'><?= $result ?></div>
            </div>
        </div>
        </div>
    </div>
</body>