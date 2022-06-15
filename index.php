<!DOCTYPE html>
<?php
error_reporting(0);
require_once "controller/controller.php";
$id = $_GET['id'];
  // récupérer tous les Article
  if(isset ($id)){
  categorie($_GET['id']);
  }
  else{
    run();
    
     }
  
 


?>