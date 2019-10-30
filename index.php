<?php include "component/header.php" ?>
<?php


// PDO object creation

$pdo = new PDO($dsn, $user, $passwd, $options);

// QUERY function + view kode

    echo "<h2>All info on all users</h2>";
    $res = $pdo->query('SELECT * FROM Users'); // en * vælger alt 
    $data = $res->fetchAll(); // fetch som associative array
    foreach ($data as $row) {
        echo $row['username']." ".$row['email']." ".$row['password']." ". "<a href='edit.php?userID=".$row['ID']."'>Edit</a>". "<br>";
    }

?>


<?php include "component/footer.php" ?>