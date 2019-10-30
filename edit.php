<?php include "component/header.php" ?>
<h2>Ændre bruger indstillinger</h2>
<?php
    $pdo = new PDO($dsn, $user, $passwd, $options);
    
    include "component/variabler.php";

        // HVIS DE 3 INPUTS ER INDTASTET
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['userPassword'])) 
    {  
        // HER SÆTTER VI VARIABLERNE TIL AT VÆRE DET VI MODTAGER I INPUTS'NE
        
        $sql = "UPDATE users SET username = :username, email= :email, userPassword = :userPassword WHERE id = :ID";
        
    
        $statement = $pdo->prepare($sql);
        $statement->execute(array(':username' => $username, ':email' => $email, ':userPassword' => $userPassword, ':ID' => $id));

        header("Location:edit-confirmation.php?userID=".$id."");

        
    };
?>

<form method="POST">
    Brugernavn:
    <input name="username" value="<?php echo $user['username'] ?>" type="text" />
    Email:
    <input name="email" value="<?php echo $user['email'] ?>" type="text" />
    Password:
    <input name="userPassword" value="<?php echo $user['userPassword'] ?>" type="text" />
    <input class="btn_green" type="submit" value="Skift" />
</form>
<a href="index.php"><button class="btn_red">Fortryd</button></a>


<?php include "component/footer.php";?>