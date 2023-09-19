<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/module2.css">
    <title>Module2</title>
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
                <a class="button" href="task1.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 2</h2>
            </div>
            <div id="next">
                <a class="button" href="task3.php">neste</a>
            </div>
        </div>
        <div>
            <?php
                //tomme strenger for form inputt felter
                $firstname = "";
                $lastname = "";
                $lastnameLengtint = 0;
                
                if($_POST) {
                    $firstname = $_POST['fname'];
                    $lastname = $_POST['lname'];



                    $firstname = trim(ucwords(strtolower(strip_tags($_POST['fname']))));
                    $lastname = trim(ucwords(strtolower(strip_tags($_POST['lname']))));

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
            <p>Førsøk og legg inn html eller php kode i feltene</p>
        </div>
    </div>
</body>