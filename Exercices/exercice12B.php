<?php
session_start(); 
?>

<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice12B</title>
        <style>
              body{
                     display: flex;
                     flex-direction: column;
                     flex-wrap: nowrap;
                     justify-content: flex-end;
                     align-items: center;
                     align-content: stretch
              }
       </style>
</head>
<body>
       <h1>Création de fonction et réutilisation de fonction</h1>
<?php
       echo"<h2>a) Fonction carré</h2>";

       function elever_au_carre($nbr){
        return $nbr ** 2;
       };

       $elever_au_carre=elever_au_carre(10);
       echo $elever_au_carre; 

       echo"<h2>b) Réutiliser une fonction</h2>";

        function multiplier($a, $b){
       return $a * $b;
              }
       function elever_au_carre1($nombre){
       return multiplier($nombre, $nombre);
       }
       echo elever_au_carre1(5); 
 ?>
</body>
</html>