<?php 
  include('includes/header.php');
  include('includes/function-pdo.php');


 // print_r($_SESSION);

if(!isset($_SESSION['email'])){
  header('Location: http://link.test/login.php');
}
// receullir les données postées par le formulaire
if(isset($_POST) && !empty($_POST)){
$album = $_POST['album'];
$artiste = $_POST['artiste'];
$genre = $_POST['genre'];


$resulte = addAlbum($album,$artiste,$genre,$pdo);
}



function addAlbum($album,$artiste,$genre,$pdo){
echo "Album inséré"; 
$sql = "INSERT INTO `disques` ( `album`, `artiste`, `genre`) 
VALUES ( :album,:artiste,:genre);"; 
$stmt = $pdo->prepare($sql);// prépare la requêtte SQl
$params = [
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
    <h1>Ajout d'un album</h1>
      <form action="add_album.php" method="post">
        <div class="form-group">
          <label for="exampleInputtitre">Album</label>
          <input required type="text" class="form-control" name="album" value="">
        </div>
          <div class="form-group">
          <label for="exampleInputtitre">Artiste</label>
          <input required type="text" class="form-control" name="artiste" value="">
        </div>
        <div class="form-group">
          <label for="exampleInputtitre">Genre</label>
          <select class="form-control" name="genre" >
              <option value="1">Rocl and roll</option>
              <option value="2">Hard Rock</option>
              <option value="3">Country Rock</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </div>

  </body>