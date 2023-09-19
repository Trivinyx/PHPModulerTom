<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/module2.css">
    <title>module2</title>
</head>
<body>
    <div id="HeaderBar">
        <div id="homebutton">
            <a class="navButton" href="../index.php">Home</a>
            <a class="navButton" href="module2.php">Module 2 Hub</a>
        </div>
        <div id="Title">
            <h1>Module2</h1>
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
        <div>
            <!--Vurdering: Laget fil. Gir etternavn stor forbokstav og resten små bokstaver. Skriver ut det behandlede etternavnet og dets lengde. Elegant løsning gir full score. Kjørbar kode. Kan forklare kode godt -->
            <!-- Lag et php script som sørger for at et etternavn blir gjort om til stor forbokstav og at resten av etternavnet
            har små bokstaver. Det behandlede navnet skal skrives ut på skjermen. Skriv også ut hvor langt
            etternavnet er.-->
            <?php
                //tomme strenger for form inputt felter
                $firstname = "";
                $lastname = "";
                $lastnameLengtint = 0;
                
                if($_POST) {
                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];



                    $firstname = trim(ucwords(strtolower($firstname)));
                    $lastname = trim(ucwords(strtolower($lastname)));

                    $lastnameLengtint = strlen($lastname); 
                }
            ?>
            <form method="post">
                <label for="fname">Fornavn:</label>
                <?php 
                    // echo av form-elementet gjør det mulig å legge til verdien av fornavnet og etternavnet i skjemaet når verdiene sendes.
                    // Verdiene vil normalt resettes i skjemaet, og gjøre skjemaet tomt etter hver sending.
                    echo "<input type='text' id='fname' name='fname' value='$firstname'>"; ?>
                <label for="lname">Etternavn:</label>
                <?php echo "<input type='text' id='lname' name='lname' value='$lastname'>"; ?>
                
                <input type="submit" value="Submit">
            </form>
            <?php 
                echo "<p>First Name: $firstname </p>";
                echo "<p>Last name: $lastname </p>";
                //echoing the html  with a paragraph containg the lengdt of last name
                echo "<p>The leng of the Last name is: $lastnameLengtint </p>";
            ?>
        </div>
    </div>
</body>
