<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice8B</title>
</head>
<body>
       <style>
              td {
                     padding: 10px 20px;
                     }
       </style>

<h1>Affichage dans un tableau HTML</h1>

<table border : 1 >

<tr>
    <td>N°</td>    
    <td>Constructeur</td>
    <td>Modèle</td>
    <td>Cylindrée</td>
</tr>
       <?php
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

for($i=0;$i < count($tableau);$i++){
   echo "<tr>
              <td>" . ($i + 1) . "</td>
              <td>" . $tableau[$i]['constructeur'] . "</td>
              <td>" . $tableau[$i]['modèle'] . "</td>
              <td>" . $tableau[$i]['cylindrée'] . "</td>
        </tr>";
}
       ?>
</table>
</body>
</html>