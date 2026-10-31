<?php

include('includes/header.php');


$pdo = new PDO(
    "mysql:host=localhost;dbname=disco",
    "root",
    "root"
);
if (!isset($_SESSION['email'])) {
  
    header('Location: login.php');
    exit();
}
$idalbum = NULL;
$album = NULL;

if (isset($_GET['idalbum'])) {
 
  $idalbum = $_GET['idalbum'];
  // TODO : fonction pour chercher les informations de l'album
$sql = "SELECT D.id as idalbum,
                   D.album,
                   D.artiste,
                   G.genre
            FROM disques D
            INNER JOIN genre G ON G.id = D.genre
            WHERE D.id = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$idalbum]);

    $album = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>


<body>
  <?php
  include('includes/navbar.php');
  ?>
  <h1>Page de détail</h1>
  <?php if ($album != NULL) { ?>

    <h2><?php echo $album['album']; ?></h2>

    <p>
        <strong>Artiste :</strong>
        <?php echo $album['artiste']; ?>
    </p>

    <p>
        <strong>Genre :</strong>
        <?php echo $album['genre']; ?>
    </p>

<?php } ?>
</body>




<?php
include('includes/snippets.php');
?>

</html>