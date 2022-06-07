<!DOCTYPE html>
<?php
error_reporting(0);
require_once "cnx.php";
$id = $_GET['id'];
  // récupérer tous les Article
  if(isset ($id)){
  $sql = "SELECT a.id as id, a.titre as titre, a.contenu as contenu FROM Article a inner join categorie c on a.categorie = c.id where c.id=$id";
  $stmt=$pdo->query($sql);
  }
  else{
    $sql = "SELECT * FROM Article";
     $stmt=$pdo->query($sql);
  }
  
  $sqli = "SELECT * FROM categorie";
  $stmti=$pdo->query($sqli);


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
      <?php while($row = $stmti->fetch(PDO::FETCH_ASSOC)) : ?>
      <li style="margin-left:50px;" > <a href="index.php?id=<?php echo htmlspecialchars($row['id']); ?>"><?php echo htmlspecialchars($row['libelle']); ?></a> </li>
      <?php endwhile; ?>   
    </ul>
    <table>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
    
     <tr onclick="window.location.href='arti.php?id=<?php echo htmlspecialchars($row['id']); ?>'">
         <td bgcolor="b3b3ff"><?php echo htmlspecialchars($row['titre']); ?></td>
         <td bgcolor="#e6e6ff"><?php echo htmlspecialchars($row['contenu']); ?></td>
     </tr>
  

     <?php endwhile; ?>   
    </table>


  </body>
</html>
