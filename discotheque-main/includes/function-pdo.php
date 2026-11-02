<?php

function isValid($email, $password, $pdo)
{

    $sql = "SELECT email,password FROM utilisateurs WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    // si le compte de $result est supérieur à zéro, ça veut dire 
    // qu'il y a des données dans le tableau
    if (count($result) > 0) {

        // Dans une second temps on vérifie si le mot de pass est bon en 
        // le comparant avec celui de la base de données
        // la fonction password_verify s'occupe  de comparer $password qui est en claire
        // et $result[0]['password'] (originaire de la table utilisateur) qui est chiffré
        if (password_verify($password, $result[0]['password'])) {
            return true;
        }
    }

    return false;
}

function getGenre($pdo){
$sql = "SELECT * FROM genre"; 
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $genres;
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

function getchanson($idchanson,$pdo){
echo "Album trouvé"; 
  $sql = "SELECT titre FROM chanson WHERE id = :idchanson";
  $stmt = $pdo->prepare($sql);
  $params = ['idchanson' => $idchanson];
  $stmt->execute( $params);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
  return $result;
}

function editchanson($idchanson,$titre,$pdo){
    echo "Chanson éditée";

    $sql = "UPDATE chanson
            SET titre = :titre
            WHERE id = :idchanson";

    $params = [
        'titre' => $titre,
        'idchanson' => $idchanson
    ];// les paramètre pour mettre à jour les requêtes SQL

    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute($params);
    print_r($stmt->errorInfo());
  
    return $result;
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


function addChanson($idalbum,$titre,$pdo){
echo "Chanson insérée"; 
$sql = "INSERT INTO `chanson` ( `idalbum`, `titre`) 
VALUES ( :idalbum,:titre);"; 
$stmt = $pdo->prepare($sql);// prépare la requêtte SQl
$params = [
       'idalbum'=> $idalbum,
       'titre'=> $titre,
     
       ] ;
       // les paramètres à mettre dans la requête SQL

       $result = $stmt -> execute($params); 
       return $result;
}


function effacerAlbum($idalbum,$pdo){
    echo "Album éffacé";
    $sql = "DELETE FROM disques  WHERE id = :idalbum;DELETE FROM chanson  WHERE idalbum = :idalbum;";
   
    $params = [    
        'idalbum' => $idalbum,
    ];// les paramètre pour mettre à jour les requêtes SQL

    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute($params);
    return $result;
}


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

//insertion dans la base de donnée
function addUser($email,$password,$pdo){

    $sql = "INSERT INTO utilisateurs (email,password) VALUES (:email,:password)";
    $stmt = $pdo->prepare($sql);
    $params = ['email' => $email,'password' => $password];
    $result = $stmt->execute($params);
    return $result;
  }