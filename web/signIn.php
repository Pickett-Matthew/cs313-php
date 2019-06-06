<?php include 'dbConnect.php' ?>

<?php 
session_start();

$badLogin = false;

if(isset($_POST['txtName']) && isset($_POST['txtPassword']))
{
    $username = $_POST['txtName'];
    $password = $_POST['txtPassword'];
    $query = 'SELECT password FROM login WHERE username=:username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);

    $result = $statement->execute();
    
    if($result)
    {
        $row = $statement->fetch();
        $hashedFromDB = $row['password'];

        if(password_verify($password, $hashedFromDB))
        {
            $_SESSION['username'] = $username;
            header("Location: home.php");
            die();
        }
        else
        {
            $badLogin = true;
        }
       
    }
    else
    {
        $badLogin = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Sign In</title>
</head>
<body>
<?php 
if($badLogin)
{
    echo "Incorrect username or password!<br>";
}
?>
    <div class="container">
        <form action="signIn.php" method="POST">

            <input type="text" name="txtName" id="txtName">
            <label for="txtName">Username</label><br>

            <input type="password" id="txtPassword" name="txtPassword">
            <label for="txtPassword">Password</label><br>

            <input type="submit" value="Sign In">

        </form>
    </div>
    <p>Don't have an account? <button><a href="SignUp.php">Sign Up</a></button></p>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>