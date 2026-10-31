<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice8A</title>
</head>
<body>
       <?php

       echo"<h1>Parcourir le tableau bidimensionnel avec la boucle for</h1>";
       $voiture1 = array(
                     "constructeur" => "Peugeot",
                     "modèle" => "1008",
                     "cylindrée" => "1.1L"
                     );
       $voiture2 = array(
                     "constructeur" => "Renault",
                     "modèle" => "Mégane",
                     "cylindrée" => "1.9L"
                     );
       $voiture3 = array(
                     "constructeur" => "Fiat",
                     "modèle" => "Scudo",
                     "cylindrée" => "1.5L"
                     );

                     $tableau = [
                     $voiture1,
                     $voiture2,
                     $voiture3,
       ];

       for($i=0;$i<count($tableau);$i++){
              echo "La " . $tableau[$i]['constructeur'] . " " . 
              " <span style='color:violet'>" .$tableau[$i]['modèle']  ."</span>" ." a une cylindrée de " .
              "<span  style='color:violet'>" . $tableau[$i]['cylindrée'] .   "</span>" . " " . "<br>" ;
       }
              
       ?>
</body>
</html>