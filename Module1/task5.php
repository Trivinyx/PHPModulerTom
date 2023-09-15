<?php
$Navn = "Ola Normann";
$Hilsen = "Håper du har en fin dag! <br> Hilsen Tom";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/module1.css">
    <title>Module1</title>
</head>
<body>
    <div id="HeaderBar">
        <div id="homebutton">
            <a class="navButton" href="../index.php">Home</a>
            <a class="navButton" href="module1.php">Module 1 Hub</a>
        </div>
        <div id="Title">
            <h1>Module1</h1>
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
        <div>
            <?php
            echo "<p>God morgen $Navn! <br>  $Hilsen </p>"
            ?>
        </div>
    </div>