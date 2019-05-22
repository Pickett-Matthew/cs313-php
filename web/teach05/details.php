<?php include 'db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>display the Link</h1>
    <?php
    if (isset($_GET['bookId'])) {
        $bookId = $_GET['bookId'];
        foreach($db->query("SELECT book, chapter, verse, content FROM scripture WHERE id = {$bookId};") as $item);
        echo "{$item['book']} {$item['chapter']}:{$item['verse']} - {$item['content']}";
    }
    ?>
    
</body>
</html>