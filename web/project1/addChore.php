<?php include 'dbConnect.php' ?>

<?php 

$child = $_POST['name'];
$description = $_POST['description'];
$c_value = $_POST['chore-value'];

echo $child . "<br>";
echo $description . "<br>";
echo $c_value . "<br>";


$workerid = pg_query($db, 'SELECT id from child where childname = $_POST["name"]');

echo $workerid;



?>
<p>These are the values</p>