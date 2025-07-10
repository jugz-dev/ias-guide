<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('Location: login.php');
        exit();
    }

    require_once 'database.php';

    $sql = "SELECT * FROM accounts"; 
    $result = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo 
                    "<tr>
                        <td>{$row["id"]}</td>
                        <td>{$row["name"]}</td>
                        <td>{$row["email"]}</td>
                        <td>{$row["address"]}</td>
                        <td>
                            <a href='edit_record.php?id={$row['id']}'>Edit</a>
                            <a href='delete_record.php?id={$row['id']}'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
            ?>
        </tbody>

    </table>


</body>
</html>