<!DOCTYPE html>
<?php
  $host = 'localhost';
  $dbname = 'mglsi_news';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les Article
  $sql = "SELECT * FROM Article where categorie = 2";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>News Website</title>
    <style media="screen">
      body{
        padding: 0px;
        margin: 0px;
      }
      ul{
        list-style-type: none;
        background-color: teal;
        width: 100%;
        height: 50px;
        margin-top: 0px;

      }
      li{
        float: left;
        margin-left: 30px;
        margin-top: 15px;
      }
      li:hover{
        opacity: 0.8;
      }
      a{
        text-decoration: none;
        color: white;
        font-size: 20px;
        font-weight: bold;
      }
    </style>
  </head>
   <body bgcolor="#b3ecff">
  <marquee direction="up"bgcolor="#b3c6ff"> <b><p align="center" >SITE NEWS</p></b></marquee>
    <ul>
      <li style="margin-left:0px;" > <a href="index.php">Acceil</a> </li>
      <li style="margin-left:50px;" > <a href="sport.php">Sport</a> </li>
      <li style="margin-left:50px;"> <a href="sante.php">Santé</a> </li>
      <li style="margin-left:50px;"> <a href="education.php">Education</a> </li>
      <li style="margin-left:50px;"> <a href="Politique.php">Politique</a> </li>
    </ul>
    <table>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td bgcolor="b3b3ff"><?php echo htmlspecialchars($row['titre']); ?></td>
       <td bgcolor="#e6e6ff"><?php echo htmlspecialchars($row['contenu']); ?></td>
     </tr>
     <?php endwhile; ?>
    </table>


  </body>
</html>
