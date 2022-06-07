<?php
 $host = 'localhost';
 $dbname = 'mglsi_news';
 $username = 'root';
 $password = '';
   
 $dsn = "mysql:host=$host;dbname=$dbname"; 

 try{
    $pdo = new PDO($dsn, $username, $password);
    
   }catch (PDOException $e){
     echo $e->getMessage();
   }

?>