<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice12E</title>
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
       <h1> : Présentation en visioconférence de 3 fonctions au choix par vous</h1>
       <h2>array_multisort()</h2>
       <!-- array_multisort() est une fonction PHP qui permet de trier plusieurs
         tableaux en même temps ou de trier un tableau multidimensionnel
          selon une colonne. -->
<?php
$personnes = [
    ["nom" => "Paul", "age" => 25],
    ["nom" => "Hugo", "age" => 18],
    ["nom" => "Anne", "age" => 30]
];
$ages = array_column($personnes, 'age');
array_multisort($ages, SORT_ASC, $personnes);
echo'<pre>';
print_r($personnes);
echo'</pre>';
?>
       <h2>array_push()</h2>
       <!-- array_push() sert à ajouter 
        un ou plusieurs éléments à la fin d'un tableau. -->
<?php
array_push($personnes,["nom" => "Serge", "age" => 27]);
echo'<pre>';
print_r($personnes);
echo'</pre>';

?>
       <h2>arsort()</h2>
       <!-- Cette fonction trie un tableau par valeurs
         décroissantes tout en conservant les clés. -->
<?php
arsort($personnes);
echo'<pre>';
print_r($personnes);
echo'</pre>';



?>



</body>
</html>