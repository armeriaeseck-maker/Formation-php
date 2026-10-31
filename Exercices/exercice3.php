<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice3</title>
</head>
<body>
       <h1>Détection de type</h1>
       <h2>gettype($variable)  </h2>

       <?php
              $var1 = "Jean de la Lune";
              $var2 = 123;
              $var3 = "123";
              $var4 = 12.5;
              $var5 = [30,15,11];

              echo gettype($var1) . "<br>";
              echo gettype($var2) . "<br>";
              echo gettype($var3) . "<br>";
              echo gettype($var4) . "<br>";
              echo gettype($var5) . "<br>";
       ?>
</body>
</html>