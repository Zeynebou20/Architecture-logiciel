<?php
function connexion()
{
  # code...

 $host = 'localhost';
 $dbname = 'mglsi_news';
 $username = 'root';
 $password = '';
   
 $dsn = "mysql:host=$host;dbname=$dbname"; 

 try{
    return new PDO($dsn, $username, $password);
    
   }catch (PDOException $e){
     echo $e->getMessage();
   }
  }
?>