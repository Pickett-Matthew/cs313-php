<?php require 'connect.php' ?>
<?php include 'navbar.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Welcome to your virtual piggy bank!</h1>
            <p>Click below to see the assigned chores for your children</p>
            <button type="submit" name="chores" class="btn btn-info">Show Chores</button><br>
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
    </div>
</body>
</html>