<?php
//runing the php command php.info() will give you a lot of information about the php installation on your computer
//uncomment the line below to see the information
//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Styles/style.css">
    <link rel="stylesheet" type="text/css" href="../Styles/module1.css">
    <title>Module1</title>
</head>
<body>
    <div id="HeaderBar">
        <div id="homebutton">
            <a class="navButton" href="../index.php">Home</a>
            <a class="navButton" href="module1.php">Module 1 Hub</a>
        </div>
        <div id="Title">
            <h1>Module1</h1>
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
        <div id="hvaErOppgavetxt">
            <p>Oppgave 2: Hva gjør phpinfo()?</p>
        </div>
        <div id="hvaErOppgaveContent">
            <p>phpinfo() er en funksjon som gir deg informasjon om php installasjonen på din datamaskin.
                Den gir deg informasjon om hvilke versjon av php du har, hvilke moduler som er installert, 
                hvilke innstillinger som er satt og mye mer.
            </p>
            <div class="resultstable">
                <table>
                <th>
                    <td>local Verdi</td>
                    <td>Master Verdi</td>
                </th>
                <tr>
                    <td>display_errors</td>
                    <td>On</td>
                    <td>On</td>
                </tr>
                <tr>
                    <td>display_startup_errors</td>
                    <td>on</td>
                    <td>on</td>
                </tr>
                </table>
            </div>
            <div class="resultstable">
                <table>
                <th>
                    <td>Path</td>
                </th>
                <tr>
                    <td>DOCUMENT_ROOT/td>
                    <td>C:/xampp/htdocs</td>
                </tr>
                </table>
            </div>
            <div id="explanation">
                <p>Her kan en se at display_errors er satt til On, dette betyr at feilmeldinger vil bli vist på nettsiden.
                    display_startup_errors er også satt til On, dette betyr at feilmeldinger som oppstår under oppstart av php vil bli vist.
                    DOCUMENT_ROOT er satt til C:/xampp/htdocs, dette er mappen som php vil lete etter filer i når en bruker relative stier.
                </p>
                <p>Under på siden kan en se fulle resultater av kjørt phpinfo()</p>
            </div>
            <!-- Relsutat data fra phpinfo() -->
            <div id="phpInfo">
                <?php
                    phpinfo();
                ?>
    </div>
</body>