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
                <a class="button" href="task3.php">forrige</a>
            </div>
            <div class="title">
                <h2>Oppgave 4: visning av jobbannonser eller veiledningsbookinger</h2>
            </div>
            <div id="next">
                <a class="button" href="task5.php">neste</a>
            </div>
        </div>
            <p>
                Lag en multidimensjonal matrise som enten inneholder informasjon om tre jobbannonser eller tre
                veiledningsbookinger: overskrift, beskrivelse, frist/veiledningstidspunkt og sted. Lag et script som kjører
                gjennom matrisen og lister opp informasjonen i en tabell.
            </p>
        </div>
        <div>
            <?php 
                //make multidimensional array

                //making the Bookings array
                $Bookings = array(
                    array(
                        "Overskrift" => "Veiledning i PHP",
                        "Beskrivelse" => "Veiledning i PHP for nybegynnere",
                        "Frist" => "04.01.2021",
                        "Sted" => "Oslo"
                    ),
                    array(
                        "Overskrift" => "Veiledning i HTML",
                        "Beskrivelse" => "Veiledning i HTML for nybegynnere",
                        "Frist" => "01.03.2024",
                        "Sted" => "Oslo"
                    ),
                    array(
                        "Overskrift" => "Veiledning i CSS",
                        "Beskrivelse" => "Veiledning i CSS for nybegynnere",
                        "Frist" => "07.01.2024",
                        "Sted" => "Oslo"
                    )
                );

                //Printing the Bookings array, in a table
                echo "<table>
                <tr>
                    <th>Overskrift</th>
                    <th>Beskrivelse</th>
                    <th>Frist</th>
                    <th>Sted</th>
                </tr>";
                foreach ($Bookings as $key => $value) {
                    echo "<tr>";
                    foreach ($value as $key => $value) {
                        echo "<td>$value</td>";
                    }
                    echo "</tr>";
                }

            ?>
        </div>
    </div>
</body>