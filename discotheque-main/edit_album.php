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
$genres = getGenre($pdo);
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
<select class="form-control" name="genre">

<?php
for($j=0; $j < count($genres); $j++){
?>
    <option
        value="<?= $genres[$j]['id'] ?>"
        <?= $result['genre'] == $genres[$j]['id'] ? 'selected' : '' ?>>
        <?= $genres[$j]['genre'] ?>
    </option>
<?php
}
?>

</select>
        </div>
        <input type="hidden" name="idalbum" value="<?= $idalbum?>">
        <button type="submit" class="btn btn-primary">Editer</button>
      </form>
    </div>

  </body>