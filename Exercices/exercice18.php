<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice18</title>
</head>
<body>
     <h1> Agrégations SQL</h1>  
     <h2>1)Exercez vous à lire le nombre de clients dans la table customers</h2>
     <h2 style="color :green">SELECT COUNT(*) as 'total client' FROM customers;</h2>
     <h2>2)Calculez le chiffre d'affaire sur toute la durée d'existence du groupe.(pour les trois boutiques cumulées)</h2>
     <h2 style="color :green">SELECT SUM(quantity * list_price * (1 - discount)) AS chiffre_affaires
              FROM order_items;</h2>
</body>
</html>