<?php include 'dbConnect.php' ?>

<?php 
$username = $_POST['txtName'];
$password = $_POST['txtPassword'];

if(!isset($username) || $username==""
    || !isset($password) || $password=="")
    {
        header("Location: SignUp.php");
        die();
    }


$hashed = password_hash($password, PASSWORD_DEFAULT);
$query = 'INSERT into login(username, password) VALUES(:username, :password)';

$statement = $db->prepare($query);
$statement->binValue(':username', $username);
$statement->binValue(':password', $hashed);

$statement->execute();

header("Location: signIn.php");
die();
?>