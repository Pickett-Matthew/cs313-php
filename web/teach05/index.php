<?php  include 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Search for a book</h1>
<?php
$whereClause = '';
$myQuery = 'SELECT * FROM scriptures';
//Look at PDO Bind Value example!
if (isset($_POST['bookName'])) {
    $myQuery .= ' WHERE book LIKE \'' . $_POST['bookName'] . '%\'';
}
foreach($db->query($myQuery) as $row)
{
    echo '<tr>';
    echo '<td>' . $row['book'] . '</td>';
    echo '<td>' . $row['chapter'] . '</td>';
    echo '<td>' . $row['verse'] . '</td>';
    echo '<td>' . $row['content'] . '</td>';
    echo '</tr>';
}
?>
</body>
</html>