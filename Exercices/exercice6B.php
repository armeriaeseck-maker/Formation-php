<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice6B</title>
</head>
<body>
       <?php

       echo "<h1>conversion en opérateur ternaire</h1>";
/* $a =2;
echo ($a ==2 ) ? "bonjour" : "au revoir"; */

       ?>
       <form method="post">
       <label> Saisir la valeur de a : </label>
       <input type="number" name="a">
       <button type="submit">Valider</button>
</form>
<?php
if(isset($_POST['a'])){
       $a = $_POST['a'];
       echo($a == 2 ? 'bonjour' : 'au revoir');
}
?>


</body>
</html>