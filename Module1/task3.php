<?php
//definering av variabler som brukes i oppgaven, som blir displayet i flere format i oppgaven, gjennom en tabell, punktmerket liste og en paragraf.
$name = "Tom Myre";
$alder = 24;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/module1.css">
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
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
                <a class="button" href="task2.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 3</h2>
            </div>
            <div id="next">
                <a class="button" href="task4.php">neste</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div>
            <p>I oppgave 3 har jeg definere variablene $name og $alder, jeg vil vise disse i ulike automatiske format</p>
            <p>Her er en tabell som viser variablene i forskjellige formater:</p>
            <div class="resultstable">
                <table>
                    <th>
                        <td>Navn</td>
                        <td>Alder</td>
                    </th>
                    <tr>
                        <td>String</td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $alder; ?></td>
                    </tr>
                </table>
            </div>
            <p>Her er en nummrert liste:</p>
            <ol>
                <li class="numbersLI">String: <?php echo $name; ?></li>
                <li class="numbersLI">Integer: <?php echo $alder; ?></li>
            </ol>
            <p>Her er en punktmerket liste som viser variablene i forskjellige formater:</p>
            <ul>
                <li class="bulletLi">String: <?php echo $name; ?></li>
                <li class="bulletLi">Integer: <?php echo $alder; ?></li>
            </ul>
            <p>Her er en paragraf som viser variablene i forskjellige formater:</p>
            <p>String: <?php echo $name; ?></p>
            <p>Integer: <?php echo $alder; ?></p>
        </div>
    </div>
