<?php include "component/header.php" ?>
<?php
$pdo = new PDO($dsn, $user, $passwd, $options);

include "component/variabler.php";
?>
<h2>du har ændret følgende brugernavn: <?php echo $user['username'] ?> og email til <?php echo $user['email'] ?> og dit
    nye password er <?php echo $user['userPassword'] ?></h2>

<a href="index.php">Tilbage til forsiden</a>
<?php include "component/footer.php";?>