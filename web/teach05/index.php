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
    foreach ($db->query('SELECT book, chapter, verse FROM scripture') as $row)
    {
        echo 'book' . $row['book'];
        echo 'chapter' . $row['chapter'];
        echo 'verse' . $row['verse'];
        echo '<br/>';
    }
?>

</body>
</html>