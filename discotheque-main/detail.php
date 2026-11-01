<?php

include('includes/header.php');

$idalbum = 0; 

if(isset($_GET['idalbum'])){
    $idalbum = $_GET['idalbum']; 
// Todo : fonction pour chercher les informations de l'album
$titres = getChansons($idalbum,$pdo); 

}


if(!isset($_SESSION['email'])){
    header('Location: login.php');
}

function getChansons($idalbum,$pdo){
  $sql = "SELECT id, idalbum, titre 
  FROM chanson WHERE idalbum = :idalbum" ;
 
  $params = ['idalbum' => $idalbum];
   $stmt = $pdo->prepare($sql);
  $stmt->execute( $params);
  $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
 
  return $result;

}

?>
<html>
    <body>
   <?php
    include('includes/navbar.php');
    ?>
<div class="container">
    <h1><?=$_GET['album'] ?> par <?=$_GET['artiste'] ?>  ;</h1>

    <table class ="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                  <th scope="col">Chanson</th>
                  <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
<?php
for($i = 0; $i < count($titres); $i++){
?>
    <tr>
        <td><?= $i + 1 ?></td>
        <td><?= $titres[$i]['titre'] ?></td>
        <td>
            <a href="edit_chanson.php?idchanson=<?php echo $titres[$i]['id']; ?>">
                 Editer Chanson
            </a>
    </td>
        
    </tr>
<?php
}
?>
</tbody>
    </table>
<a href="add_chanson.php?idalbum=<?=$idalbum?>&artiste=<?=$_GET['artiste']?>&album=<?=$_GET['album']?>" class="btn btn-primary">Ajouter une Chanson</a>
</div>

</body>
 <?php
 include('includes/snippets.php');
 ?>
</html>