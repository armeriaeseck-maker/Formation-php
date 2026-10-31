<?php

$connexion = mysqli_connect(
    "localhost",
    "root",
    "root",
    "disco"
);

if (!$connexion) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $album = $_POST['album'];
    $artiste = $_POST['artiste'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO disques (album, artiste, genre)
            VALUES ('$album', '$artiste', '$genre')";

    if (mysqli_query($connexion, $sql)) {
        echo "Disque ajouté avec succès !";
    } else {
        echo "Erreur : " . mysqli_error($connexion);
    }
}

?>  

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un disque</title>
</head>
<body>

<h2>Ajouter un disque</h2>

<form method="post">

    Album :
    <input type="text" name="album" required>
    <br><br>

    Artiste :
    <input type="text" name="artiste" required>
    <br><br>

    Genre :
    <input type="number" name="genre" required>
    <br><br>

    <input type="submit" value="Ajouter">

</form>

</body>
</html>