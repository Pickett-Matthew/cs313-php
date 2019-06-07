<?php include 'dbConnect.php' ?>

<?php 
session_start();

if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
}
else
{
    header("Location: signIn.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="myStyle.css">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light pb-1rem">
        <a class="navbar-brand" href="#">
            <img src="piggy.jpg" width=30 height=30 alt="">
            Virtual Piggy Bank
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="signOut.php">Sign Out</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
            </li>
        </ul>
    </nav>
    <h1 class="jumbotron jumbotron-fluid">Welome to the home page, <?=$username ?></h1>
    
    <div class="container-fluid">

        <!-- input field to select Active chores from child table --> 
        <div class="row content">
            <div class="col-sm-4 sidenav">
                <h4>Your Children</h4>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <select name="option" class="custom-select">
                            <option selected><i>Choose from below<i></option>
                            <?php 
                                foreach($db->query('SELECT childname FROM child')as $row)
                                {
                                    $child = $row['childname'];
                                    echo "<option value='$child'>$child</option>";
                                }
                            ?>
                        </select>
                    <button type="submit" class="btn btn-info my-2">Search</button>
                </form>
            </div>


            <!-- Add a new chore to database --> 
            <div class="col-sm-8">
                <h4><small>Add a Chore</small></h4>
                <hr>
                <form action="addChore.php" method="post">
                    <h6><small>Chose Child</small></h6>
                        <select name="name" class="custom-select">
                            <option selected><i>Choose from below<i></option>
                            <?php 
                                foreach($db->query('SELECT childname FROM child')as $row)
                                {
                                    $child = $row['childname'];
                                    echo "<option value='$child'>$child</option>";
                                }
                            ?>
                        </select>
                        <hr>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description">
                        </div>  
                        <hr>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                                <input type="text" class="form-control-xs" name="chore-value" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary mt-2" value="Add Chore">
                </form>
            </div>


            <!-- displays the name, age, and bank of child selected -->                  
            <div class="container-fluid">
                <div class="row content">
                    <div class="col-sm-4 sidenav">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <?php 
                                if($_SERVER['REQUEST_METHOD'] == "POST") {
                                    if(isset($_POST['option'])){
                                        foreach($db->query("SELECT childname, age, bank FROM child WHERE childname = '{$_POST['option']}';") as $item) {
                                            echo "<div class='list-group'><li class='list-group-item'> {$item['childname']} </li> 
                                                <li class='list-group-item'> {$item['age']} years old</li>
                                                <li class='list-group-item'> {$item['bank']} dollars in piggy bank</li>";
                                        }
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>

        </div> <!-- columns -->

</div> <!-- main div container --> 






<script src="myScript.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>