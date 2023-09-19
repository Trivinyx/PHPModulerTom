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
                <a class="button" href="task3.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 4</h2>
            </div>
            <div id="next">
                <a class="button" href="task5.php">neste</a>
            </div>
        </div>
            <!--Oppgavetekst: Lag et script som skriver ut en beskjed til brukeren basert på hvilket fylke en kommune tilhører.
            Kommunene som skal sjekkes er: Kristiansand, Lillesand, Birkenes, Harstad, Kvæfjord, Tromsø, Bergen,
            Trondheim, Bodø og Alta. Beskjeden skal se noe slik ut: «[kommune] ligger i [fylke] fylke». Teksten i
            klammeparentes må erstattes med det respektive kommunenavnet som sjekkes.-->
            <?php 
            #Creating an array with the options to choose from
            $kommuner = array("Kristiansand", "Lillesand", "Birkenes", "Harstad", "Kvæfjord", "Tromsø", "Bergen", "Trondheim", "Bodø", "Alta");
            #Form to choose which municipality to check dropsown list from array
            echo "<form action='task4.php' method='post'>
                <label for='kommune'>Velg kommune:</label>
                <select id='kommune' name='kommune'>";
                #for loop to print out all the options in the array
                for($i = 0; $i < count($kommuner); $i++){
                    echo "<option value='$kommuner[$i]'>$kommuner[$i]</option>";
                }
            echo "</select><br>
                <input type='submit' value='Sjekk'>
                </form>";
            # if form is submitted, check which county the municipality is in
            if($_POST){
                $kommune = $_POST["kommune"];
                #switch case to check which county the municipality is in
                switch($kommune){
                    case "Kristiansand":
                    case "Lillesand":
                    case "Birkenes":
                        $fylke = "Vest-Agder";
                        break;
                    case "Harstad":
                    case "Kvæfjord":
                    case "Tromsø":
                        $fylke = "Troms";
                        break;
                    case "Bergen":
                        $fylke = "Hordaland";
                        break;
                    case "Trondheim":
                        $fylke = "Sør-Trøndelag";
                        break;
                    case "Bodø":
                        $fylke = "Nordland";
                        break;
                    case "Alta":
                        $fylke = "Finnmark";
                        break;
                }
                #print out the result
                echo "<p>$kommune ligger i $fylke fylke</p>";
            }
            ?>
        </div>
    </div>
</body>