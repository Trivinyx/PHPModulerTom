<?php 
//import user class
include "./UserManagment.php";
?>
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
                <a class="button" href="task1.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 2: registrering av ny bruker</h2>
            </div>
            <div id="next">
                <a class="button" href="task3.php">neste</a>
            </div>
        </div>
            <p>
                Lag et skjema som registrerer en ny bruker i systemet du utvikler. Skjemaet må inneholde all nødvendig
                informasjon om brukeren (f.eks. navn, mobilnummer., e-post, osv.) og skal gi feilmelding dersom:<br>
                <ul>
                    <li>obligatoriske felt mangler (hvilke felt må vises til brukeren)</li>
                    <li>noen felt er feil utfylt (hvilke felt må vises til brukeren)</li>
                </ul>
                <br>
                I tillegg må input fra brukeren sjekkes. Feilsjekk og validering må gjøres ved hjelp av PHP (ikke gjennom
                å bruke funksjonaliteten i HTML). Når skjemaet sendes, skal data fra skjemaet lagres i en matrise og
                skrives ut på skjermen på en oversiktlig måte sammen med en beskjed om at den nye brukeren er
                registrert. Normalt ville vi lagret denne informasjonen i en database, men det skal vi gjøre litt senere.
            </p>
        </div>
        <div id="CodeBlock">
            <?php
                $name = $email = $phone = $address = "";
                $error = false;
                if(!$error){
                $nameErr = $emailErr = $phoneErr = $addressErr = "";
                }
                
                $success = false;

                //User array
                $user = array(
                    "name" => $name,
                    "email" => $email,
                    "phone" => $phone,
                    "address" => $address
                );

                
                if($_POST){
                    //validate inputs
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                        $error = true;
                    } else {
                        $name = test_input($_POST["name"]);
                        if (!preg_match($namePattern, $name)) {
                            $nameErr = "Only letters and white space allowed";
                            $error = true;
                        }
                    }
                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                        $error = true;
                    } else {
                        $email = test_input($_POST["email"]);
                        if (!preg_match($emailPattern, $email)) {
                            $emailErr = "Invalid email format";
                            $error = true;
                        }
                    }
                    if (empty($_POST["phone"])) {
                        $phoneErr = "Phone is required";
                        $error = true;
                    } else {
                        $phone = test_input($_POST["phone"]);
                        if (!preg_match($phonePattern, $phone)) {
                            $phoneErr = "Invalid phone number";
                            $error = true;
                        }
                    }
                    if (empty($_POST["address"])) {
                        $addressErr = "Address is required";
                        $error = true;
                    } else {
                        $address = test_input($_POST["address"]);
                        if (!preg_match($addressPattern, $address)) {
                            $addressErr = "Invalid address";
                            $error = true;
                        }
                    }
                    //if no errors, save user
                    if (!$error) {
                        $success = true;
                        saveUser($user);
                    } else {
                        $success = false;
                    }
                }
                //If success print user
                if ($success) {
                    echo "<h2>Success!</h2>";
                    echo "<p>Name: $name</p>";
                    echo "<p>Email: $email</p>";
                    echo "<p>Phone: $phone</p>";
                    echo "<p>Address: $address</p>";
                }
                //print form with error messages, if any. submit to self without reload
                echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>
                    <h2>Register new user:</h2>
                    <p><span class='error'>* required field</span></p>
                    <p>name: <input type='text' name='name' value='" . $user["name"] . "'></p>
                    <span class='error'>* " . $nameErr . "</span>
                    <p>email: <input type='text' name='email' value='" . $user["email"] . "'></p>
                    <span class='error'>* " . $emailErr . "</span>"."
                    <p>phone: <input type='text' name='phone' value='" . $user["phone"] . "'></p>
                    <span class='error'>* " . $phoneErr . "</span>
                    <p>address: <input type='text' name='address' value='" . $user["address"] . "'></p>
                    <span class='error'>* " . $addressErr . "</span>
                    <input type='submit' value='Registrer'>
                    </form>";

                //Check if form is valid, if so save user

        
            ?>
        </div>
    </div>
</body>