<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice6A</title>
</head>
<body>
       <h1>construction if…else</h1>

       <?php
echo "<h2>Achat >= 100€, un cadeau offert</h2>";
?>

<form method="post">
    Montant :
    <input type="number" name="montant">
    <button type="submit">Valider</button>
</form>
 
<?php
if (isset($_POST['montant'])) {

    $montant =(float) $_POST['montant'];
    
    if ($montant >= 100) {
        echo "Vous avez gagné un cadeau";
    } else if($montant < 100) {
       $restant = 100 - $montant; 
        echo "Vous n'avez pas gagné un cadeau <br>";
        echo "Si vous voulez un cadeau, votre montant est de $montant € veillez de dépenser encore un motant de $restant €";
    }
}
?>
<!-- pour les question 3 et 4 , on remplace $_POST par $_POST -->
</body>
</html>