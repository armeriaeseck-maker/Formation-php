<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice4B</title>
</head>
<body>
       <h1 style = 'color: violet'>Fonction explode,implode</h1>
       <?php
              $depart = "un_renard_saute_par_dessus_le_chien_paresseux.jpg";
              // 1) fonction str_replace()
              $arrivee = str_replace('_','-',$depart);
              echo "<h2 style = 'color: blue'> fonction str_replace() </h2>";
              echo  "<h2> départ vaut : </h2> "  . $depart . "<br>";
              echo "<h2>arrivée vaut : </h2>" . $arrivee;

              // 2) fonctions explode() et implode()
              echo "<h2 style = 'color: blue'> fonctions explode() et implode()</h2>";
              //Découpage de la chaîne
               $departExplode = explode('_',$depart);
              //Reconstruction avec des tirets
              $arriveeImplode = implode('-',$departExplode);
               echo "<h2>départ vaut : </h2>". $depart . "<br>";
              echo "<h2>arrivée vaut : </h2>". $arriveeImplode;
              
              
       ?>
</body>
</html>