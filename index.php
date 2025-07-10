<?php
session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style_index.css">
</head>
<body>
    <div class="header">
        <h1>Hello, World!</h1>

        <a href="logout.php">
            <button class="logout-btn">Log Out</button>
        </a>
    </div>

</body>
</html>