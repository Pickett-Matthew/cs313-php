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
                foreach($db->query('SELECT chore.description, child.childname from chore inner Join 
                child on chore.workerId = child.id') as $chore) {
                    echo "<h4> {$chore['description']} - {$chore['childname']} </h4></br>";
                }
            }
        }
        ?>
    </form>
</body>
</html>