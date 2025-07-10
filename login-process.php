<?php
session_start(); 

require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

//ang next kay, atong tawagon ang db
$query = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
$result = mysqli_query($conn, $query);

//icheck nato kung naa bay nakuha or wala
if(mysqli_num_rows($result) == 1){
    $_SESSION['username'] = $username;
    header('Location: index.php');
}else{
    header('Location: login.php');
}

?>