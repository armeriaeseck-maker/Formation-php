<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice7C</title>
</head>
<body>
       <h1>accéder à n'importe quelle valeur d'un tableau mixte multidimensionnel.</h1>
<?php
$arr = [
    "nom" => "Dupont",
    "Hugo",
    "info" => array("token" => "dnchieruo", "role" => 'admin'),
    "prenom" => "Jean",
    "Jacques",
    "email" => "toto@gmail.com",
    "historique_commande" => [
        ["datecommande" => '2020-12-01', "montant" => "100.15"],
        ["datecommande" => '2020-11-01', "montant" => "50.05"]
    ]
];
echo "<h2>A l'intérieur clé : info</h2>";
echo '<pre>';
print_r($arr['info']);
echo '</pre>';
echo "<h2>A l'intérieur clé : historique_commande </h2>";
echo '<pre>';
print_r($arr['historique_commande']);
echo '</pre>';

?>




</body>
</html>