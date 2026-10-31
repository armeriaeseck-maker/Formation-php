<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice7A</title>
</head>
<body>
       <?php
       echo "<h1>construire un tableau indexé de tableaux associatifs</h1>";
       
       $plat1=['nom' => 'Pizza', 'origine'=>'Italie'];
       $plat2=array('nom'=>'Couscouse','origine'=>'Maroc');
       $carte = [
               ["nom" => "Steak à cheval", "origine" => "France"],
              ["nom" => "Pizza Calzone", "origine" => "Italie"],
              ];
       array_push($carte,$plat2);
       $carte[]=$plat1;
       echo "<pre>";
       echo('la nouvelle carte est : <br>');
       print_r($carte);
       echo "</pre>";


       ?>
       
</body>
</html>