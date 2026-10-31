<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$connexion = mysqli_connect("localhost", "root", "root", "population");

if (!$connexion) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

echo "Connexion réussie<br>";

$sql = "SELECT * FROM pays";
$resultat = mysqli_query($connexion, $sql);

if (!$resultat) {
    die("Erreur SQL : " . mysqli_error($connexion));
}

while ($ligne = mysqli_fetch_assoc($resultat)) {
    echo $ligne['nom'] . "<br>";
}
?>