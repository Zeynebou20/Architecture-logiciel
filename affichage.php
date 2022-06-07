<?php
  $host = 'localhost';
  $dbname = 'mglsi_news';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les Article
  $sql = "SELECT * FROM Article";
   
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

<html>
<head></head>
<body>
 <h1></h1>
 <table>
   <thead>
     <tr>
       <th>titre</th>
       <th>contenue</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['titre']); ?></td>
       <td><?php echo htmlspecialchars($row['contenu']); ?></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
</body>
</html>