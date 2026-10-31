<?php
$fichier = fopen("population_by_country_2020.csv", "r");

echo "<table border= '2' style='margin: 3px; padding : 2px'>";

while (($ligne = fgetcsv($fichier, 1000, ",")) !== false) {

    echo "<tr>";

    for ($i = 0; $i < count($ligne); $i++) {
        echo "<td>" . $ligne[$i] . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
echo getcwd();

fclose($fichier);

?>
