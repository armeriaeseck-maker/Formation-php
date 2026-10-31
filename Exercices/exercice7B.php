<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice7B</title>
</head>
<body>
       <?php
       echo"<h1>accéder à n’importe quelle valeur d’un tableau mixte</h1>";
$arr = [
    "nom" => "Dupont",
    "Hugo",
    "prenom" => "Jean",
    "Jacques",
    "email" => "toto@gmail.com",
];
print_r($arr[0])
?>
</body>
</html>