<?php include "component/header.php" ?>
<?php
$pdo = new PDO($dsn, $user, $passwd, $options);

include "component/variabler.php";
?>
<h2>Dine oplysninger er ændret til</h2>
Brugernavn:
<div class='users'>
    <?php echo $user['username'] ?>
</div>
Email:
<div class='users'>
    <?php echo $user['email'] ?>
</div>
Password:
<div class='users'>
    <?php echo $user['userPassword'] ?>
</div>

<a href="index.php"><button class="btn_green">Tilbage til forsiden</button></a>

<?php include "component/footer.php";?>