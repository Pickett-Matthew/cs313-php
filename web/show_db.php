<?php include 'connect.php' ?>
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
        foreach ($db->query('SELECT child_name, password FROM public.child') as $row)
        {
          echo 'user: ' . $row['child_name'];
          echo ' password: ' . $row['password'];
          echo '<br/>';
        }
    ?>
</body>
</html>