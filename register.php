<?php 

require_once 'database.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];


$sql = "INSERT INTO accounts (first_name, last_name)
VALUES ('$first_name', '$last_name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('location: welcome.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>