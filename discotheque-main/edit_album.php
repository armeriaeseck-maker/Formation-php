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
       $result = getAlbum($idalbum,$pdo);
    
}
// recuellir les données postées par le formulaire
if(isset($_POST) && !empty($_POST)){
$album = $_POST['album'];
$artiste = $_POST['artiste'];
$genre = $_POST['genre'];
$idalbum = $_POST['idalbum'];
$resulte = editAlbum($idalbum,$album,$artiste,$genre,$pdo);
header('Location: liste.php');
exit; 
}

function getAlbum($idalbum,$pdo){
echo "Album trouvé"; 
  $sql = "SELECT album, artiste, genre FROM disques WHERE id = :idalbum";
  $stmt = $pdo->prepare($sql);
  $params = ['idalbum' => $idalbum];
  $stmt->execute( $params);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
  return $result;
}

function editAlbum($idalbum,$album,$artiste,$genre,$pdo){
echo "Album inséré"; 

$sql = "UPDATE disques 
SET album = :album, artiste = :artiste, genre = :genre
 WHERE id = :idalbum;"; 

$stmt = $pdo->prepare($sql);// prépare la requêtte SQl
$params = [
        'idalbum' => $idalbum,
       'album'=> $album,
       'artiste'=> $artiste,
       'genre'=> $genre
       ] ;
       // les paramètres à mettre dans la requête SQL

       $result = $stmt -> execute($params); 
       return $result;
}

?>
<body>
    <?php
    include('includes/navbar.php');
    ?>

    <div class="container">
    <h1>Edition d'un album</h1>
      <form action="edit_album.php" method="post">
        <div class="form-group">
          <label for="exampleInputtitre">Album</label>
          <input required type="text" class="form-control" name="album" value="<?= $result['album']?>">
        </div>
          <div class="form-group">
          <label for="exampleInputtitre">Artiste</label>
          <input required type="text" class="form-control" name="artiste" value="<?= $result['artiste']?>">
        </div>
        <div class="form-group">
          <label for="exampleInputtitre">Genre</label>
          <select class="form-control" name="genre" >
              <option value="1"<?= $result ['genre'] == 1 ? 'selected' : '' ?>>Rock</option>
              <option value="2" <?= $result ['genre'] == 2 ? 'selected' : '' ?>>Hard Rock</option>
              <option value="3"<?= $result ['genre'] == 3 ? 'selected' : ''  ?>>Country Rock</option>
          </select>
        </div>
        <input type="hidden" name="idalbum" value="<?= $idalbum?>">
        <button type="submit" class="btn btn-primary">Editer</button>
      </form>
    </div>

  </body>