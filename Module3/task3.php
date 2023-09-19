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
                <a class="button" href="task2.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 3</h2>
            </div>
            <div id="next">
                <a class="button" href="task4.php">neste</a>
            </div>
        </div>
        <!-- Oppgave Tekst: Skriv et program som ber om startsaldo S0 og rente. Programmet skal beregne ny saldo S1 etter ett år
        inkludert renter og skrive S1 ut på skjermen. Utvid programmet med en løkke, slik at saldo Sn etter en
        periode på n år kan beregnes. Skriv ut ny saldo for hvert år og Sn etter n år.
        -->
        <?php 
        # Kode for oppgave 3
        $Saldo = 0;
        $rente = 0;
        $timeYears = 1;
        #Form to input startSaldo and rente, storing the values in the variables above, rente is in percent float
        echo "<form action='task3.php' method='post'>
            <label for='startSaldo'>Start saldo:</label>
            <input type='number' id='startSaldo' step='any' name='startSaldo'><br>
            <label for='rente'>Rente:</label>
            <input type='number' step='any' id='rente' name='rente'><br>
            <label for='timeYears'>Antall år:</label>
            <input type='number' id='timeYears' name='timeYears' value='$timeYears'><br>
            <input type='submit' value='Regn ut'>
            </form>";
        # if form is submitted, calculate the new saldo
        if($_POST){
            $Saldo = $_POST["startSaldo"];
            $rente = $_POST["rente"];
            $timeYears = $_POST["timeYears"];
            # for loop to calculate the new saldo for each year
            for($i = 0; $i < $timeYears; $i++){
                $Saldo = $Saldo + ($Saldo * ($rente/100));
                #limit print to 0.01
                $viewSaldo = round($Saldo, 2);
                # print the new saldo for each year
                echo "<p>Saldo etter ".($i+1)." år: $viewSaldo Kr.</p>";
            }
            # print the new saldo after the timeYears
            #limit print to 0.01
            $viewSaldo = round($Saldo, 2);
            echo "<p>Saldo etter $timeYears år: $viewSaldo Kr.</p>";
        }



        ?>
        
        </div>
    </div>
</body>