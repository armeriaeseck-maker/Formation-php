<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice3.2</title>
</head>
<body>
       <h1>Superglobale $_POST</h1>
       <form action="http://link.test/exercices/exercice3.2.php" method = "POST">
             <input type="text" name ="terme" value =""> 
             <input type="submit" value="Soumettre">
       </form>
       <?php
              echo '<pre>';
              print_r($_POST);
              echo '</pre>'
       ?>
</body>
</html>