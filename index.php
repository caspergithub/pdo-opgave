<?php include "component/header.php" ?>

<h2>Alt information om alle brugere</h2>



<?php


// PDO object creation

$pdo = new PDO($dsn, $user, $passwd, $options);

// QUERY function + view kode

    $res = $pdo->query('SELECT * FROM Users'); // en * vælger alt 
    $data = $res->fetchAll(); // fetch som associative array
    foreach ($data as $row) {
        echo "<div class='users-container'>";
        echo "<div class='users'>";
        echo "<strong>U | </strong>".$row['username']." <strong>E | </strong> ".$row['email']." <strong>P | </strong> ".$row['userPassword'];
        echo "</div>";
        echo "<a class='edit-button' href='edit.php?userID=".$row['ID']."'>+</a>";
        echo "<a class='delete-button' href='delete.php?userID=".$row['ID']."'>x</a>";
        echo "</div>";
    }

?>

<a href="create.php"><button class="btn_green">Tilføje ny bruger</button></a>

<?php include "component/footer.php" ?>