<?php include 'connect.php' ?>
<?php include 'navbar.php' ?>

<?php 
// this page will recieve info from signup.php and insert
// data into the database

//my variables
$username = $_POST['username'];
$password = $_POST['password'];
$query = 'INSERT into login(username, password) values(:username, :password)';

$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $password);

$statement->execute();

header("Location: login.php");

?>