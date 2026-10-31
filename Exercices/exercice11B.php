<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice11B</title>
</head>
<body>
     <!--   mettre du style -->
              <style>
                     td {
                     padding: 10px 20px;
                     }
              </style>
  <!--  faire une table -->
       <table border = 1>
              <tr>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Niveau</th>
              </tr>
       <?php
              echo "<h1>Afficher une table HTML du contenu d'un tableau</h1>";
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

              for($i=0;$i< count($tableau);$i++){
              echo  "<tr>
              <td>".$tableau[$i]['constructeur']."</td>
              <td>".$tableau[$i]['modèle']."</td>
              <td>".$tableau[$i]['cylindrée']."</td>
              </tr>";
              }
        ?>
</table>

</body>
</html>