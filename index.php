<?php include "component/header.php" ?>

<h2>alt information om alle brugere</h2>

<?php


// PDO object creation

$pdo = new PDO($dsn, $user, $passwd, $options);

// QUERY function + view kode

    $res = $pdo->query('SELECT * FROM Users'); // en * vælger alt 
    $data = $res->fetchAll(); // fetch som associative array
    foreach ($data as $row) {
        echo $row['username']." ".$row['email']." ".$row['userPassword']." ". "<a href='edit.php?userID=".$row['ID']."'>Edit</a>"." " . "<a href='delete.php?userID=".$row['ID']."'>delete</a>". "<br>";
    }

?>

<a href="create.php">Tilføje ny bruger</a>


<?php include "component/footer.php" ?>