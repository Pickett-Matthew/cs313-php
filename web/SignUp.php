<?php include 'dbConnect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    <form action="createAcct.php" method="POST">
        Name: <input type="text" name="txtName" id="txtName"><br>
        Password: <input type="password" name="txtPassword" id="txtPassword"><br>

        <input type="submit" value="Create Account">
        
    </form>
</body>
</html>