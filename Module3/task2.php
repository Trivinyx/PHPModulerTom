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
                <a class="button" href="task1.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 2</h2>
            </div>
            <div id="next">
                <a class="button" href="task3.php">neste</a>
            </div>
        </div>
        <!--OppgaveTekst: Lag et script som teller fra 0 til 9 ved hjelp av en for-løkke. Hvert tall skal presenteres på skjermen med
            ett sekunds pause mellom hvert tall. Du må også regne ut summen av tallene 0-9 og presentere dette
            to sekunder etter at tellingen er ferdig. Det kan se noe slik ut: «Ferdig å telle! Summen av tallene ble
            [sum]». Hint: Bruk <br> på slutten av HTML-strengen (da tvinger du frem linjeskift for hver iterasjon).-->
        <?php
        # Kode for oppgave 2
        
        #get the page to print out the numbers in real time
        ob_end_flush();
        ob_implicit_flush(true);
        # call the function
        countToTen();
        # for loop to count from 0 to 9

        function countToTen(){
            $sum = 0;
            
            for($i = 0; $i < 10; $i++){
                # print the number
                echo "<p>$i</p>";
                # add the number to the sum
                $sum += $i;
                # wait 1 second
                sleep(1);
            }
            sleep(2);
            # print the sum
            echo "<p>Ferdig å telle! Summen av tallene ble ".$sum."</p>";
            

        }
        
        ?>
        </div>
    </div>
</body>