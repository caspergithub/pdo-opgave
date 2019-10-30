<?php include "component/header.php" ?>
<?php
$pdo = new PDO($dsn, $user, $passwd, $options);

if($pdo){
    // get id from
  $id=$_GET["userID"];
  $stmt = $pdo->query('SELECT * FROM users WHERE id='.$id);
  $user = $stmt->fetch();
  }

?>
<h2>du har ændret følgende brugernavn: <?php echo $user['username'] ?> og email til <?php echo $user['email'] ?> og dit
    nye password er <?php echo $user['userPassword'] ?></h2>

<a href="index.php">Tilbage til forsiden</a>
<?php include "component/footer.php";?>