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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Welcome to your virtual piggy bank!</h1>
        <p>Click below to see the assigned chores for your children</p>
        <button type="submit" name="chores">Show Chores</button><br>
        <?php if($_SERVER['REQUEST_METHOD'] == "POST") {
            if(isset($_POST['chores'])) {
                foreach($db->query('SELECT description FROM chore') as $chore) {
                    echo "<h4>{$chore['description']}</h4></br>";
                }
            }
        }
        ?>
    </form>
    <h1>Form ends below are other querys</h1>
    <?php 
        foreach($db->query('SELECT childname, age FROM child') as $row) 
        {
            echo "<p>{$row['childname']} {$row['age']}</p><br>";
        }
    ?>
    <h1>There current chores are:</h1>
    <?php 
        foreach($db->query('SELECT description FROM chore') as $chore)
        {
            echo "<p>{$chore['description']}</p>";
        }
    ?>
</body>
</html>