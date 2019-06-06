<?php include 'dbConnect.php' ?>

<?php 
session_start();

if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
}
else
{
    header("Location: signIn.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Welome to the home page, <?=$username ?></h1>
</body>
</html>