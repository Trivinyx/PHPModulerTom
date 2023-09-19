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
                <a class="button" href="">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 1</h2>
            </div>
            <div id="next">
                <a class="button" href="task2.php">neste</a>
            </div>
        </div>
        <!-- oppgave: Lag et lite script som sjekker hvorvidt en jobbannonse har utløpt eller hvorvidt et event allerede er
            gjennomført. Skriv ut resultatet på skjermen. -->
        <?php 
            #Form to input title of event and time of event
            echo "<form action='task1.php' method='post'>
                <label for='title'>Tittel:</label>
                <input type='text' id='title' name='title'><br>
                <label for='time'>Tidspunkt:</label>
                <input type='datetime-local' id='time' name='time'><br>
                <input type='submit' value='Sjekk'>
                </form>";
            #get current time with timezone
            $currentTime = new DateTime("now", new DateTimeZone('Europe/Oslo'));
            # if form is submitted, check if event is expired
            if($_POST){
                $eventTime = new DateTime($_POST["time"], new DateTimeZone('Europe/Oslo'));
                $eventTitle = $_POST["title"];
                # if event is expired, print out that it is expired
                if($eventTime < $currentTime){
                    echo "<p>Eventet $eventTitle har utløpt</p>";
                } else {
                    # if event is not expired, print out how long until it expires
                    $interval = $eventTime->diff($currentTime);
                    echo "<p>Eventet $eventTitle skjer om: ".$interval->format('%a dager, %h timer, %i minutter og %s sekunder')."</p>";
                    # print the time of the event
                    echo "<p>Eventet $eventTitle skjer: ".$eventTime->format('d.m.Y H:i')."</p>";
                }
            }

        ?>
        </div>
    </div>
</body>
