<?php 

if($pdo){
    // get id from
  $id=$_GET["userID"];
  $stmt = $pdo->query('SELECT * FROM users WHERE id='.$id);
  $user = $stmt->fetch();
  }

  $username = $_POST['username'];
$email = $_POST['email'];
$userPassword = $_POST['userPassword'];




?>