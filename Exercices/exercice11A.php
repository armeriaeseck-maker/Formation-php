<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Execice11A</title>
</head>
<body>
       <style>
td {
    padding: 10px 20px;
}
</style>

      <h1><?="Générer une liste HTML"?></h1>
      <?php
              $pays= ["Allemagne","Italie","Espagne","France"];
              echo "<ul>";
              for($i = 0; $i<count($pays);$i++){
                     echo "<li>" . $pays[$i] . "</li>";
              };
              echo "</ul>"
      ?>
      
      <h1><?="Tableau bidimensionnel"?></h1>
     
 <table border = "1" style="margin:15px">
              <tr>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Niveau</th>
              </tr>
              <!-- DEBUT section à générer dans la boucle HTML -->
              <?php
              $etudiants = [
                            ["nom" => "Dupont", "prenom" =>"Alexandre", "niveau" => "master",],
                            ["nom" => "Martin", "prenom" => "Julia", "niveau" => "Licence",],
                            ["nom" => "Guichard", "prenom" => "Léa", "niveau" => "Licence",],
                            ["nom" => "Redon", "prenom" => "Maximilien", "niveau" => "Master",],
                            ];
            for($i=0;$i< count($etudiants);$i++){

              // code à l'intérieur de la boucle for
              echo  "<tr>
                     <td>".$etudiants[$i]['nom']."</td>
                     <td>".$etudiants[$i]['prenom']."</td>
                     <td>".$etudiants[$i]['niveau']."</td>
              </tr>";} ?>
              <!-- FIN section à générer dans la boucle HTML -->
</table>

</body>
</html>