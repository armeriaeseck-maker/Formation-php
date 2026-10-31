<?php
/*
1-Reconnaitre la structure (tableau, objet, chaine, nombre...)
2-Visualiser la structure mentalement
3-savoir avec la boucle FOR parcourir les tableaux de
 par pas de 1, 2 voire plus, 
du plus petit au plus grand et inversément
*/

$var1 = [71, 22, 13, 44, 51, 63];
$var2 = [
    "Toto", // élément accessible par var2[0]
    "Jean", //var2[1]
    "Dupont" //var2[2]
];
$var3 = [
    [ "nom" => "Jean", "age" => 23  ], // var3[0]
    [ "nom" => "Sophie", "age" => 30  ], // var3[1]
    [ "nom" => "Jacques", "age" => 12  ] // var3[2]
];


$var4 = [
    ["Renault", "Peugeot"], //var4[0]     
    ["Audi", "BMW"], //var4[1]
    ["Fiat", "Ferrari"] //var4[2]
];

// exemple par cour ascendant
for($i=0;$i < count($var1);$i=$i+1){
  echo $var1[$i]. " ";
}

echo  "<br>";
// exemple parcours descendant
for($i=count($var1) - 1;$i >= 0 ;$i=$i-1){
  echo $var1[$i] . " ";
}
echo  "<br>";
// exemple parcours descendant
?>
<table border = "1">

<?=
       $var3 = [
       [ "nom" => "Jean", "age" => 23  ], // var3[0]
       [ "nom" => "Sophie", "age" => 30  ], // var3[1]
       [ "nom" => "Jacques", "age" => 12  ] // var3[2]
       ];
       for($i=0;$i < count($var3);$i=$i+1){
       echo "<tr> 
                     <td>".$var3[$i]['nom']."</td>
                     <td>" .$var3[$i]['age']."</td>
              </tr>";
       }
?>
</table>
