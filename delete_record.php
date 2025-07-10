<?php

require_once 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM accounts WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
header('location: view_accounts.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

?>