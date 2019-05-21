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
        $statement = $db->prepare("SELECT workerId, description, dueBy FROM chore");
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $workerId = $row['workerId'];
            $description = $row['description'];
            $dueBy = $row['dueBy'];
            echo "<p><strong>$workerId $description $dueBy</strong><p>";
        }
    ?>
</body>
</html>