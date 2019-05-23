<?php require 'connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>I am pulling info from my Database</h1>
    <?php 
        foreach($db->query('SELECT childname, age FROM child') as $row) 
        {
            echo $row['childname'] . " is " . $row['age'] . " years old.";
        }
    ?>
</body>
</html>