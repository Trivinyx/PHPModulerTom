<?php 
    
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
                <a class="button" href="task2.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 3: visning og endring av brukerprofil</h2>
            </div>
            <div id="next">
                <a class="button" href="task4.php">neste</a>
            </div>
        </div>
            <p>
                Lag et script som viser en brukerprofil basert på innholdet i en matrise. For å gjøre dette må du lage en
                matrise med den nødvendige informasjonen i begynnelsen. Visningen skal gjøres i form av et skjema
                som inneholder den eksisterende informasjonen om brukeren. Dersom skjemaet sendes, skal den nye
                informasjonen lagres i matrisen. Løsningen er ekstra elegant dersom du først sjekker om det er gjort
                noen endringer før informasjonen skrives til matrisen. Brukeren må få beskjed om at brukeroppføringen
                er endret. Det er samme krav til validering, feilsjekk og feilmeldinger som i forrige oppgave.
            </p>
        </div>
        <div>
            <?php
                //include usermanagment
    include "./UserManagment.php";

    //user arrey
    $FormUser = array(
        "name" => "Ola Nordmann",
        "email" => "Ola.Nord@Mann.no",
        "phone" => "94857632",
        "address" => "Kongeveien 1"
    );
    $Localuser = $FormUser;
    //make form to change details
    //local error variables for form
    $nameErr = $emailErr = $phoneErr = $addressErr = "";
    $error = false;
    $success = false;

    //Form validation
    if($_POST){
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
            if (!$error) {
                $success = true;
            } else {
                $success = false;
            }
            if($success){
            //save user after validation
            $FormUser = array(
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "address" => $address
            );
            $user = saveUser($FormUser);
            $Localuser = $FormUser;
            } else {
                $Localuser = $FormUser;
            }
        }
                //print user arrey data
                if ($success) {
                    echo "<h2>user data changed:</h2>";
                    echo "<p>name: " . $Localuser["name"] . "</p>
                    <p>email: " . $Localuser["email"] . "</p>
                    <p>phone: " . $Localuser["phone"] . "</p>
                    <p>address: " . $Localuser["address"] . "</p>";
                    $success = false;
                } else {
                    echo "<h2>user data:</h2>";
                    echo "<p>name: " . $Localuser["name"] . "</p>
                    <p>email: " . $Localuser["email"] . "</p>
                    <p>phone: " . $Localuser["phone"] . "</p>
                    <p>address: " . $Localuser["address"] . "</p>";
                };
                
                //Form print
                echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>
                <h2>Register new user:</h2>
                <p><span class='error'>* required field</span></p>
                <p>name: <input type='text' name='name' value='" . $FormUser["name"] . "'></p>
                <span class='error'>* " . $nameErr . "</span>
                <p>email: <input type='text' name='email' value='" . $FormUser["email"] . "'></p>
                <span class='error'>* " . $emailErr . "</span>"."
                <p>phone: <input type='text' name='phone' value='" . $FormUser["phone"] . "'></p>
                <span class='error'>* " . $phoneErr . "</span>
                <p>address: <input type='text' name='address' value='" . $FormUser["address"] . "'></p>
                <span class='error'>* " . $addressErr . "</span>
                <input type='submit' value='Registrer'>
                </form>";
            ?>
        </div>
        
    </div>
</body>