<?php 
  include('includes/header.php');
  include('includes/function-pdo.php');


 // print_r($_SESSION);

if(!isset($_SESSION['email'])){
  header('Location: login.php');
}
//recuellirl'idalbum via $_GET(barre d'adresse)
if(isset($_GET['idalbum'])){   
$idalbum = $_GET['idalbum'];


       $result = effacerAlbum($idalbum,$pdo);
  header("Location: liste.php");

}
// recuellir les données postées par le formulaire


?>
