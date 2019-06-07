<?php include 'dbConnect.php' ?>

<?php 

$child = $_POST['name'];
$description = $_POST['description'];
$c_value = $_POST['chore-value'];

echo $child . "<br>";
echo $description . "<br>";
echo $c_value . "<br>";

foreach($db->query("SELECT id from child WHERE childname = '{$_POST["name"]}';")as $workerid)
{
    $workerid = $workerid['id'];
}

$query = "INSERT into chore(workerid, description, c_value) VALUES(:workerid, :description, :c_value)";

$statement = $db->prepare($query);

$statement->bindValue(':workerid', $workerid);
$statement->bindValue(':description', $description);
$statement->bindValue(':c_value', $c_value);

$statement->execute();

header("Location: home.php");
?>
