<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice19</title>
</head>
<body>
       <h1> <u>INNER JOIN</u> :  permet de relier deux tables à l'aide d'une clé commune et de récupérer uniquement les lignes qui correspondent dans les deux tables.</h1>
<h2> 1)Lister les stocks de chaque produit</h2>
<h2 style="color :green">SELECT p.product_name, s.quantity
FROM stocks s
INNER JOIN products p
ON s.product_id = p.product_id;
<h2>2)Lister les employés de chaque boutique</h2>
<h2 style="color :green">SELECT st.store_name, sf.first_name, sf.last_name
FROM stores st
INNER JOIN staffs sf
ON st.store_id = sf.store_id;</h2>
<h2>3)Calculez le chiffre d'affaire sur toute la durée pour les produit de la catégorie « Children bicycle »</h2>
<h2 style="color :green">SELECT c.category_name,
       SUM(oi.quantity * oi.list_price * (1 - oi.discount)) AS chiffre_affaires
FROM categories c
INNER JOIN products p
ON c.category_id = p.category_id
INNER JOIN order_items oi
ON p.product_id = oi.product_id
WHERE c.category_name = 'Children Bicycles'
GROUP BY c.category_name;</h2>


</body>
</html>