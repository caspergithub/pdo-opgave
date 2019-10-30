<?php include "component/header.php" ?>

<h2>Delete en bruger</h2>

<?php 

$pdo = new PDO($dsn, $user, $passwd, $options);
    

if($pdo){
    // get id from
  $id=$_GET["userID"];
  $stmt = $pdo->query('SELECT * FROM users WHERE id='.$id);
  $user = $stmt->fetch();
  }


  if(isset($_POST["submit"])) {
    $query = "DELETE FROM users WHERE id = $id";
    $pdo->exec($query);
    header("Location:delete-confirmation.php");
  }

?>

<?php echo $user['username'] ?>
<br>
<?php echo $user['email'] ?>
<br>
<?php echo $user['userPassword'] ?>

<form method="POST" style="display:grid; width: 10%;">
    <input type="submit" name="submit" value="delete" />
</form>

<button><a href="index.php">fortryd</a></button>




<?php include "footer.php" ?>