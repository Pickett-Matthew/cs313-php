<?php include 'connect.php' ?>
<?php include 'navbar.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="createAcct.php" method="POST" class="form-horizontal">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" name="txtusername" id="name_id" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="txtpassword" id="password_id" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password_id" class="form-control">
            </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</body>
</html>