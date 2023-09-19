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
                <a class="button" href="task3.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 4</h2>
            </div>
            <div id="next">
                <a class="button" href="task5.php">neste</a>
            </div>
        </div>
        <div>
            <?php 
                $tall1 = 0;
                $tall2 = 0;
                $result;
            ?>
            <form method="post">
                <label for="var1">Verdi 1:</label>
                <?php echo "<input type='number' id='var1' name='var1' value='$tall1'>"; ?>
                <label for="var2">Verdi 2:</label>
                <?php echo "<input type='number' id='var2' name='var2' value='$tall2'>"; ?>
                <input type="submit" value="Regn ut"><br>
            </form> 
            <?php 
                if($_POST){
                    $result = abs($_POST["var1"] - $_POST["var2"]);
                    $postVar1 = $_POST["var1"];
                    $postVar2 = $_POST["var2"];

                    echo "<p> Den absolutte differansen mellom $postVar1 og $postVar2 er: $result";
                }
            ?>
        </div>
    </div>
</body>