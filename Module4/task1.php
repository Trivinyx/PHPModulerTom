<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/module4.css">
    <title>module4</title>
</head>
<body>
    <div id="HeaderBar">
        <div id="homebutton">
            <a class="navButton" href="../index.php">Home</a>
            <a class="navButton" href="module4.php">Module 4 Hub</a>
        </div>
        <div id="Title">
            <h1>Module4</h1>
        </div>
    </div>
    <div class="mainContainer">
        <div id="titleBar">
            <div id="previous">
                <a class="button" href="">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 1: skriv ut innholdet i en matrise</h2>
            </div>
            <div id="next">
                <a class="button" href="task2.php">neste</a>
            </div>
        </div>
            <p>
                Lag et lite script som oppretter en matrise med heltall som nøkkel. Matrisen skal ha nøklene 0, 3, 5, 7,
                8 og 15. Skriv deretter ut matrisen med både nøkler og innhold ved hjelp av funksjonen print_r() og ved
                å bruke en løkke.
            </p>
            <div class="codeContainer">
                <p>
                    <?php
                        $matrise = array(0 => "hei", 3 => "på", 5 => "deg", 7 => "!", 8 => "Hyggelig", 15 => "møte");
                        print_r($matrise);
                        echo "<br>";
                        foreach ($matrise as $key => $value) {
                            echo "Key: $key, Value: $value <br>";
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
