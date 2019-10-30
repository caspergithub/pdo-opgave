<?php
include "component/header.php";

$pdo = new PDO($dsn, $user, $passwd, $options);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];
//tjekker om knappen er blevet trykket.
if (isset($_POST['submit'])) {
    // henter data fra formen, og laver en variable med dens værdi.

    // query string med named placeholders.
    $check = "SELECT username FROM users WHERE username = :username";
    // sikkerhed. prepared statement.
    $checkStmt = $pdo->prepare($check);
    // Binder $username til :username
    $checkStmt->bindValue(':username', $username);
    // Udfører handlingerne oven over.
    $checkStmt->execute();
        // Checker om der er  en fundet et username på databsen, ud fra hvad man skriver i formen.
        if (!$checkStmt->rowCount() > 0 )
        {
            // query string med named placeholders.
            $sql = "INSERT INTO users (username, email, userPassword) VALUES (:username, :email, :password)";
            // sikkerhed. prepared statement.
            $stmt = $pdo->prepare($sql);
            // sikkerhed. prepared statement.
            $stmt->bindValue(':username', $username);
            // sikkerhed. prepared statement.
            $stmt->bindValue(':email', $email);
            // sikkerhed. prepared statement.
            $stmt->bindValue(':password', $password);
            // Udfører handlingerne oven over.
            $stmt->execute();
            
            header("Location:create-confirmation.php");
        } else {
            echo 'Brugeren findes!';
        }
}
?>

<h2>tilføj en ny bruger ved at udfylde felterne</h2>

<form method="post">
    <input type="text" required name="username" id="name" placeholder="Username">
    <input type="text" required name="email" id="email" placeholder="E-mail">
    <input type="text" required name="pass" id="pass" placeholder="password">
    <input type="submit" value="Send" name="submit">
</form>


<?php include "component/footer.php";?>