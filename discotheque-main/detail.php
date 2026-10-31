<?php

include('includes/header.php');

print_r($_SESSION);

$idalbum = 0;

if (isset($_GET['idalbum'])) {
  $idalbum = $_GET['idalbum'];


  // TODO : fonction pour chercher les informations de l'album

}

if (!isset($_SESSION['email'])) {
  header('Location: login.php');
}
?>

<body>
  <?php
  include('includes/navbar.php');
  ?>
  <h1>Page de détail</h1>
</body>


<?php
include('includes/snippets.php');
?>

</html>