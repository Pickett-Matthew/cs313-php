<?php include 'dbConnect.php' ?>

<?php 

$child = $_POST['name'];
$description = $_POST['description'];
$c_value = $_POST['chore-value'];

echo $child . "<br>";
echo $description . "<br>";
echo $c_value . "<br>";

foreach($db->query('SELECT id from child WHERE childname = $child')as $workerid)
{
    echo $workerid;
}
?>
<p>These are the values</p>