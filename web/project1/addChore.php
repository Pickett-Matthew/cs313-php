<?php include 'dbConnect.php' ?>

<?php 

$child = $_POST['name'];
$description = $_POST['description'];
$c_value = $_POST['chore-value'];


$query = "SELECT id from child where childname = $child";
$workerid = $db->prepare($query);

echo $child . "<br>";
echo $$description . "<br>";
echo $c_value . "<br>";
echo $workerid . "<br>";



?>
<p>These are the values</p>