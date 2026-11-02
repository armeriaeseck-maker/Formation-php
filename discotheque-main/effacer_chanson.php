<?php 
  include('includes/header.php');
  include('includes/function-pdo.php');


 // print_r($_SESSION);

if(!isset($_SESSION['email'])){
  header('Location: login.php');
}
//recuellirl'idalbum via $_GET(barre d'adresse)
if(isset($_GET['idchanson'])){
       $idchanson = $_GET['idchanson'];
         $artiste = $_GET['artiste'];
           $album = $_GET['album'];
             $idalbum = $_GET['idalbum'];


       $result = effacerchanson($idchanson,$pdo);
  header("Location: detail.php?idalbum=$idalbum&artiste=$artiste&album=$album");

}
// recuellir les données postées par le formulaire

function effacerchanson($idchanson,$pdo){
    echo "Chanson éffacé";
    $sql = "DELETE FROM chanson  WHERE id = :idchanson;";
    $params = [    
        'idchanson' => $idchanson,
    ];// les paramètre pour mettre à jour les requêtes SQL

    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute($params);
    return $result;
}

?>
