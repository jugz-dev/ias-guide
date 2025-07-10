<?php
session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit();
}

?>

<?php

require_once 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM accounts WHERE id = $id";
$result = mysqli_query($conn, $sql); //record
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <h1>Edit Record</h1>

    <form action="update_record.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">

        Name: <input type="text" name="username" value="<?php echo $row['name']?>"> <br>
        Email: <input type="text" name="email" value="<?php echo $row['email']?>"> <br>
        Address: <input type="text" name="address" value="<?php echo $row['address']?>"><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>