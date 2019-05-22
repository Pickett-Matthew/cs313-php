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
    foreach($db->query('SELECT book, chapter, verse, content FROM scripture') as $row)
    {
        echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . " " . $row['content'];
        echo "</br>";
    }
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Enter a Book name: <input type="text" name="book" id="bookSearch">
    <button type="submit">Submit</button><br>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if(isset($_POST['book'])){
                foreach($db->query("SELECT book, chapter, verse, content FROM scripture WHERE book = '{$_POST['book']}';") as $item) {
                    echo "<b>{$item['book']} {$item['chapter']} {$item['verse']} - {$item['content']}</b><br>";
                }
            }
        }
    ?>
</form>
</body>
</html>