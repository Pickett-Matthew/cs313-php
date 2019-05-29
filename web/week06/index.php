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
        <form action="insert.php" method="POST">
            <p>Insert a New Scripture</p>
            <input type="text" name="book" Placeholder="Book"><br>
            <input type="text" name="chapter" Placeholder="Chapter"><br>
            <input type="text" name="verse" Placeholder="Verse"><br>
            <input type="textarea" name="content" rows=3 columns=40><br>
            
            <?php 
                foreach($db->query('SELECT id, name FROM topic') as $row) {
                    $id = $row['id'];
                    $name = $row['name'];
                    echo "<input type='checkbox' name='boxes[]' id='boxes$id' value='$id'>";
                    echo "<label for='boxes$id'>$name</label><br>";
                }
            ?>

                Submit: <input type="submit" value="Add to DB">
        </form>
    </div>
</body>
</html>