<?php include 'connect.php' ?>
<?php include 'navbar.php' ?>

<?php 
// this page will recieve info from signup.php and insert
// data into the database

//my variables
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];
$query = 'INSERT into login(username, password) values(:txtusername, :txtpassword)';

$statement = $db->prepare($query);
$statement->bindValue(':txtusername', $username);
$statement->bindValue(':txtpassword', $password);

$statement->execute();

header("Location: login.php");

?>