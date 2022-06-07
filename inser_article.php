<?php
$host = 'localhost';
$dbname = 'mglsi_news';
$username = 'root';
$password = '';
if(isset($_POST['insert'])){
  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }
  // récupérer les valeurs 
  $titre = $_POST['titre'];
  $contenu = $_POST['contenu'];
  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `users`(`titre`, `contenu`) VALUES (:titre,:contenu)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":titre"=>$titre,":contenu"=>$contenu));
  // vérifier si la requête d'insertion a réussi
  if($exec){
    echo 'Données insérées';
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>