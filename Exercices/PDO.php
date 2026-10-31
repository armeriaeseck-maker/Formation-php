<?php

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=csv_db 8;charset=utf8",
        "root",
        "root"
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql1 = "SELECT p.product_name, s.quantity
       FROM stocks s
       INNER JOIN products p
       ON s.product_id = p.product_id;";
$sql2 = "SELECT st.store_name, sf.first_name, sf.last_name
       FROM stores st
       INNER JOIN staffs sf
       ON st.store_id = sf.store_id;";


    $resultat1 = $pdo->query($sql1);
    $donnees1 = $resultat1->fetchAll(PDO::FETCH_ASSOC);
    
    $resultat2 = $pdo->query($sql2);
    $donnees2 = $resultat2->fetchAll(PDO::FETCH_ASSOC);

echo "
<style>
table{
    border-collapse:collapse;
}

th,td{
    border:1px solid black;
    padding:5px;
}

.conteneur{
    display:flex;
    gap:20px;
    align-items:flex-start;
}
</style>
";

echo "<div class='conteneur'>";



    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Produit</th>";
    echo "<th>Stock</th>";
    echo "</tr>";

    for($i = 0; $i < count($donnees1); $i++) {
        echo "<tr>";
        echo "<td>" . $donnees1[$i]['product_name'] . "</td>";
        echo "<td>" . $donnees1[$i]['quantity'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>store_name</th>";
    echo "<th>first_name</th>";
     echo "<th>last_name</th>";
    echo "</tr>";

    for($i = 0; $i < count($donnees2); $i++) {
        echo "<tr>";
         echo "<td>" . $donnees2[$i]['store_name'] . "</td>";
          echo "<td>" . $donnees2[$i]['first_name'] . "</td>";
           echo "<td>" . $donnees2[$i]['last_name'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    

} catch(PDOException $e) {

    echo "Erreur : " . $e->getMessage();

}
echo "</div>";
?>