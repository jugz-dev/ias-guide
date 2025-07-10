<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
</head>
<body>
    <form action="register_accounts.php" method="POST">
        Username: <input type="text" name="username">
        Email: <input type="text" name="email">
        Address: <input type="text" name="address">

        <button type="submit">Submit</button>
    </form>

    <a href="view_accounts.php">
        <button>View Accounts</button>
    </a>
    
</body>
</html>