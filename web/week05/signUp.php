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
    <div class="container-fluid">
        <h2>Sign Up</h2>
        <form action="createAcct.php" method="POST" class="form-horizontal">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name_id"><br>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password_id"><br>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password_id">
            </div>

            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</body>
</html>