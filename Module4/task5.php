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
                <a class="button" href="task4.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 5: kontaktskjema</h2>
            </div>
            <div id="next">
                <a class="button" href="">neste</a>
            </div>
        </div>
            <p>
                Lag et kontaktskjema hvor en bruker kan skrive og sende en melding. Meldingen må inneholde
                avsenders navn og e-postadresse samt meldingens emnetittel og innhold. Vi skal senere lære hvordan
                vi kan sende e-post, så i denne oppgaven skal meldingen skrives ut på skjermen etter at skjemaet er
                sendt.
            </p>
            <div class="codeContainer">
                <p>
                    <?php
                        include "./UserManagment.php";
                        //predefine variables
                        $name = $email = $subject = $message = "";
                        //local error variables for form
                        $nameErr = $emailErr = $subjectErr = $messageErr = "";
                        $error = false;
                        $success = false;
                        //check if form is submitted
                        if($_POST){
                            //validate name and email
                            if(empty($_POST["name"])){
                                $nameErr = "Name is required";
                                $error = true;
                            }else{
                                $name = test_input($_POST["name"]);
                                if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                                    $nameErr = "Only letters and white space allowed";
                                    $error = true;
                                }
                            }
                            if(empty($_POST["email"])){
                                $emailErr = "Email is required";
                                $error = true;
                            }else{
                                $email = test_input($_POST["email"]);
                                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                    $emailErr = "Invalid email format";
                                    $error = true;
                                }
                            }
                            //check if subject and message is empty
                            if(empty($_POST["subject"])){
                                $subjectErr = "Subject is required";
                                $error = true;
                            }else{
                                $subject = test_input($_POST["subject"]);
                            }
                            if(empty($_POST["message"])){
                                $messageErr = "Message is required";
                                $error = true;
                            }else{
                                $message = test_input($_POST["message"]);
                            }
                            //if no errors, set success to true
                            if(!$error){
                                $success = true;
                            }
                        }
                        //if success is true, print message
                        if($success){
                            echo "<h2>Message sent</h2>";
                            echo "<h4>Name: $name</h4>";
                            echo "<h4>Email: $email</h4>";
                            echo "<h4>Subject: $subject</h4>";
                            echo "<p>$message</p>";
                        }

                        //making the form
                        if(!$success){
                            echo "<form method='post' action='task5.php'>";
                            echo "<label for='name'>Name:</label>";
                            echo "<input type='text' name='name' id='name' value='$name'>";
                            echo "<span class='error'>$nameErr</span>";
                            echo "<br>";
                            echo "<label for='email'>Email:</label>";
                            echo "<input type='text' name='email' id='email' value='$email'>";
                            echo "<span class='error'>$emailErr</span>";
                            echo "<br>";
                            echo "<label for='subject'>Subject:</label>";
                            echo "<input type='text' name='subject' id='subject' value='$subject'>";
                            echo "<span class='error'>$subjectErr</span>";
                            echo "<br>";
                            echo "<label for='message'>Message:</label>";
                            echo "<textarea name='message' id='message' rows='10' cols='30'>$message</textarea>";
                            echo "<span class='error'>$messageErr</span>";
                            echo "<br>";
                            echo "<input type='submit' value='Send'>";
                            echo "</form>";
                        } else {
                            echo "<a href='task5.php'>Send another message</a>";
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>