<?php include 'dbConnect.php' ?>

<?php 

$child = $_POST['add_chore_name'];
$description = $_POST['description'];
$c_value = $_POST['chore-value'];

$workerid = "SELECT id from child where childname = $child ";

$query = 'INSERT into chore(workerid, description, c_value) VALUES(:workerid, :description, :c_value)';

$statement = $db->prepare($query);

$statement->bindValue(':workerid', $workerid);
$statement->bindValue(':description', $description);
$statement->bindValue(':c_value', $c_value);

$statement->execute();

header("Location: home.php");
die();


?>