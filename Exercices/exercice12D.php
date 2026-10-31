<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width= , initial-scale=1.0">
       <title>Exercice12D</title>
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
       <h1> inversion de l'ordre des mots d'une phrase</h1>
<?php
echo"<h2>1/ implode() et explode()</h2>";
$phrase = "journaux les chercher alla Toto";
$tab = explode(" ", $phrase);
echo implode(" ", array_reverse($tab));
?>
<?php
echo"<h2>2/ fonction</h2>";
function remettreEndroit($phrase){
              $tab = explode(" ", $phrase);
              return implode(" ", array_reverse($tab));
       }
$remettreEndroit = remettreEndroit($phrase);
echo $remettreEndroit; 

?>
<?php
echo"<h2>3/ séparateur</h2>";
function remettreEndroit1($phrase){
              $tab = explode(" ", $phrase);
              return implode("-", array_reverse($tab));
       }
$remettreEndroit = remettreEndroit1($phrase);
echo $remettreEndroit; 

?>


</body>
</html>