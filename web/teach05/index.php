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
        $statement = $db->query('SELECT book, chapter, verse, content FROM scriptures');
        $statement->execute();

        foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
        {
            echo '<p><span>' . $row['book'] . $row['chapter'] . $row['verse'] . '</span>'  .$row['content'] . '</p>';
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?> ">
        <label for="book">Search by book</label>
        <input type="text" name="book" id="book" placeholder="Book">
        <button type="submit">Search</button>
    </form>
</body>
</html>