<?php
require_once "cnx.php";

  function articles(){
    try {
     
$pdo = connexion();
    $sql = "SELECT * FROM Article";
    return $pdo->query($sql); 
    } 
    catch (\Throwable $th) {
      echo $th.getMessage();
    }
  }

  function categorieModele($id){
    try {
     
$pdo = connexion();
$sql = "SELECT a.id as id, a.titre as titre, a.contenu as contenu FROM Article a inner join categorie c on a.categorie = c.id where c.id=$id";
    return $pdo->query($sql); 
 
    } catch (\Throwable $th) {
      echo $th.getMessage();
    }
  }
  function categories()
  {
    $pdo = connexion();
    $sqli = "SELECT * FROM categorie";
    return $pdo->query($sqli);
  }

 
  ?>
 