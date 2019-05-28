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
    <div class='container'>
        <form action="">
            <p>Insert a New Scripture</p>
            <input type="text" name="book"><br>
            <input type="text" name="chapter"><br>
            <input type="text" name="verse"><br>
            <input type="textarea" name="content" rows=3><br>
            
            <?php 
                foreach($db->query('SELECT id, name FROM topic') as $row) {
                    echo $row['id'];
                    echo $row['name'];
                }
            ?>
        </form>
    </div>
</body>
</html>