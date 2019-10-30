<?php include "component/header.php" ?>

<h2>Delete din bruger</h2>

<?php 

$pdo = new PDO($dsn, $user, $passwd, $options);
    

include "component/variabler.php";

  if(isset($_POST["submit"])) {
    $query = "DELETE FROM users WHERE id = $id";
    $pdo->exec($query);
    header("Location:delete-confirmation.php");
  }

?>
<p>Username:
    <?php echo $user['username'] ?>
</p>
<p>Email:
    <?php echo $user['email'] ?>
</p>
<p>Password:
    <?php echo $user['userPassword'] ?>
</p>
<form method="POST">
    <input type="submit" class="btn_red" name="submit" value="Delete" />
</form>

<a href="index.php"><button class="btn_green">Fortryd</button></a>




<?php include "footer.php" ?>