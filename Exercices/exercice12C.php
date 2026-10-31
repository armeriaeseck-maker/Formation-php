<?php
function concat_by_valeur($string)
{
    $string .= " suivie d'une autre chaine.";
    return $string;
}

$str_origine2 = 'ceci est une chaine, ';

echo concat_by_valeur($str_origine2);
echo "<br>";
echo $str_origine2;
?>