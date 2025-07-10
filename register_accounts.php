<?php

require_once 'database.php'; #naa na tay connection sa database

#data nga gikan sa welcome.php
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];


#sugod diri is maginsert ug data padung sa database
$sql = "INSERT INTO accounts (name, email, address) #columns sa table
VALUES ('$username', '$email', '$address')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
    header('location: welcome.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>