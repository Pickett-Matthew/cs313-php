<?php require 'connect.php' ?>
<?php include 'navbar.php' ?>


<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = 'SELECT password from login WHERE username =:username';

$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$result = $statement->execute();

if($result)
{
  $row = $statement->fetch();
  $pw = $row['password'];

  if($password == $pw)
  {
    $_SESSION['username'] == $username;
    header("Location: home.php");
    die();
  }
  else
  {
    echo "incorrect data!";
  }
}
else
{
  echo "bad result!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2 class="p-3">Please enter you Username and Password</h2>
  <form class="form-inline" action="home.php" method="POST">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="btn btn-info" class="btn btn-default">Submit</button>
  </form>
</div>
<hr class="my-4">
<div class="container">
  <div class="jumbotron">
    <p class="lead">Create a new account here!</p><br>
    <button class="btn btn-primary btn-sm">Sign Up</button>
  </div>
</div>
</body>
</html>