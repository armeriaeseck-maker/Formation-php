<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Fichier get_contents</title>
</head>
<body>
       <?php
$contenu = file_get_contents("http://link.test/exercices/fichierCsv.php");
echo $contenu;
       ?>
</body>
</html>