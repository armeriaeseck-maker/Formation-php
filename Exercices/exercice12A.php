<?php
session_start(); 
?>

<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice12A</title>
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
       <h1>Création de function</h1>
       <?php
       echo"<h2>a) Une fonction qui affiche <<'Bonjour'>></h2>";
       function message(){
             return "Bonjour";
       }
       $message = message();
       echo $message;
       echo"<h2>b) Une fonction qui affiche <<'Bonjour Michel'>></h2>";
       function prenom1($prenom){
       echo "Bonjour $prenom";
       }
       $prenom = prenom1('Michel'); 
       echo $prenom; 
       echo"<h2>c) Concaténation<<'Bonjour Michel'>></h2>";
       function prenom2($prenom){
       return "Bonjour" . " " .$prenom;
       }
       $prenom = prenom2('Michel'); 
       echo $prenom; 
       echo"<h2>d) Fonction multiple</h2>";
       function multiplier($a,$b){
       return $a*$b; 
       }
       function afficherResultat($a, $b){
       echo $a . " * " . $b . " = " . multiplier($a, $b) . "<br>";
       }
      
       $multiplier = multiplier(3,5); 
       $afficherResultat = afficherResultat(2, 2); 
       echo  $multiplier; 
       echo  $afficherResultat; 

       ?>


</body>
</html>