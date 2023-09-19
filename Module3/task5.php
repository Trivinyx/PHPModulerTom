<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/module3.css">
    <title>module3</title>
</head>
<body>
    <div id="HeaderBar">
        <div id="homebutton">
            <a class="navButton" href="../index.php">Home</a>
            <a class="navButton" href="module3.php">Module 3 Hub</a>
        </div>
        <div id="Title">
            <h1>Module3</h1>
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
        # Task 5 : Tenk deg et sjakkbrett med hvetekorn på. For hver rute på brettet, fordobler du antall hvetekorn. For
        # eksempel: rute 1 har ett hvetekorn, rute 2 har to hvetekorn, rute 3 har fire hvetekorn og så videre. Lag
        # et script som viser antall hvetekorn for hver eneste rute på sjakkbrettet.
        # Det totale antall hvetekorn skal i tillegg omregnes til antall tonn med hvete. Ifølge ChatGPT-4, veier et
        # gjennomsnittlig hvetekorn omtrent 0,035 gram.

        # constants
        $wheatWeight = 0.035;
        # variables
        $wheatPerSquare = 1;
        $wheatTotal = 1;
        $wheatTotalWeight = 0;

        # loop through all squares to calculate wheat in each square present as table 8x8
        # in each loop, double the wheat in the square
        echo "<table>";
        for ($i = 0; $i < 8; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 8; $j++) {
                echo "<td>";
                echo $wheatPerSquare;
                echo "</td>";
                $wheatPerSquare *= 2;
                $wheatTotal += $wheatPerSquare;
                
            }
            echo "</tr>";
        }
        echo "</table>";
        # calculate total weight of wheat, and convert to tons
        $wheatTotalWeight = $wheatTotal * $wheatWeight;
        $wheatTotalWeight /= 1000; #convert to kg
        $wheatTotalWeight /= 1000; #convert to tons
        echo "<p>Total weight of wheat: $wheatTotalWeight tons</p>";
        
        ?>
        
        </div>
    </div>
</body>