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
    <title>Sign In</title>
</head>
<body>
<?php 
if($badLogin)
{
    echo "Incorrect username or password!<br>";
}
?>
    <form action="signIn.php" method="POST">
        <input type="text" name="txtName" id="txtName">
        <label for="txtName">Username</label><br>

        <input type="password" id="txtPassword" name="txtPassword">
        <label for="txtPassword">Password</label><br>

        <input type="submit" value="Sign In">

    </form>
    <p>Don't have an account? <button><a href="SignUp.php">Sign Up</a></button></p>
</body>
</html>