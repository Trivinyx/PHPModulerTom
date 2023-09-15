<?php
// setter opp et tomt array
$taskArray = array();
//legger til fire tall i arrayet
array_push($taskArray, 45);
array_push($taskArray, 12);
array_push($taskArray, 33);
array_push($taskArray, 15);
//verdi som holder summen av tallene i arrayet
$sum = 0;
//for løkke som går gjennom arrayet og legger sammen tallene
for($i = 0; $i < count($taskArray); $i++){
    $sum += $taskArray[$i];
}
//regner ut gjennomsnittet av tallene i arrayet
$average = $sum / count($taskArray);

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
                <a class="button" href="task3.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 4</h2>
            </div>
            <div id="next">
                <a class="button" href="task5.php">neste</a>
            </div>
        </div>
        <div class="content">
            <p>I denne oppgave har jeg i koden laget et arrey som jeg har fylt med disse tallene:</p>
            <!-- Viser arrayet, ved bruk av for -->
            <p>Arrayet inneholder disse tallene: 
                <?php
                    for($i = 0; $i < count($taskArray); $i++){
                        echo $taskArray[$i] . ", ";
                    }
                ?>
            </p>
            <!-- Viser summen av tallene i arrayet -->
            <p></p>
            <p>Disse to kommende statmentene er baser på kalkulasjoner som er gjort ved kode:<br>
            Summen av tallene i arrayet er: <?php echo $sum; ?><br>
            Gjennomsnittet av tallene i arrayet er: <?php echo $average; ?>
            </p>
            <!-- Viser gjennomsnittet av tallene i arrayet -->
        </div>
    </div>