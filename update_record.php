<?php

require_once 'database.php';

$id = $_POST['id'];
$name = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "UPDATE accounts SET name='$name', email='$email', address='$address' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
  echo "New record updated successfully";
    header('location: view_accounts.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>