<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Exercice15</title>
       <style>
              h2{
                     color : green; 
              }
       </style>
</head>
<body>
       <h1>Opération INSERT</h1>
       <h2>INSERT INTO products (
    product_name,
    brand_id,
    category_id,
    model_year,
    list_price
)
VALUES (
    'Velo Test',
    10,
    11,
    2017,
    500
);</h2>
       
<h2>Vérifier</h2>
<h2>SELECT * FROM products WHERE product_name = 'Velo Test';</h2>

</body>
</html>