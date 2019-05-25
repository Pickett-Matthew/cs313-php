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
            <h1>Welcome <?php echo $_POST['username']; ?>, to your virtual piggy bank!</h1>
            <p>Click below to see the assigned chores for your children</p>
            <button type="submit" name="chores" class="btn btn-info">Show Chores</button><br>
            <?php if($_SERVER['REQUEST_METHOD'] == "POST") {
                if(isset($_POST['chores'])) {
                    foreach($db->query('SELECT chore.description, child.childname from chore inner Join 
                    child on chore.workerId = child.id') as $chore) {
                        echo "<h4 class='row'><p class='glyphicon glyphicon-ok'> {$chore['childname']}</p> - {$chore['description']}</h4></br>";
                    }
                }
            }
            ?>
        </form>
    </div>

    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php 
                if($_SERVER['REQUEST_METHOD'] == "POST") {
                    if(isset($_POST['child'])){
                        foreach($db->query("SELECT childname, age, bank FROM child WHERE childname = '{$_POST['child']}';") as $item) {
                            echo "<div class='list-group'><li class='list-group-item'> {$item['childname']} </li> 
                                  <li class='list-group-item'> {$item['age']} years old</li>
                                  <li class='list-group-item'> {$item['bank']} in piggy bank</li>";
                        }
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>