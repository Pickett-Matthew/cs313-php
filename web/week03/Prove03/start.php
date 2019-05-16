<?php session_start();

$products = array("shirt", "shoes", "pants");
$amounts = array("10.99", "25.99", "49.99");

if ( !isset($_SESSION["total"]) ) {
    $_SESSION["total"] = 0;
    for ($i=0; $i< count($products); $i++) {
     $_SESSION["qty"][$i] = 0;
    $_SESSION["amounts"][$i] = 0;
   }
  }
  //---------------------------
  //Reset
  if ( isset($_GET['reset']) )
  {
  if ($_GET["reset"] == 'true')
    {
    unset($_SESSION["qty"]); //The quantity for each product
    unset($_SESSION["amounts"]); //The amount from each product
    unset($_SESSION["total"]); //The total cost
    unset($_SESSION["cart"]); //Which item has been chosen
    }
  }
  //---------------------------
  //Add
  if ( isset($_GET["add"]) )
    {
    $i = $_GET["add"];
    $qty = $_SESSION["qty"][$i] + 1;
    $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
    $_SESSION["cart"][$i] = $i;
    $_SESSION["qty"][$i] = $qty;
  }
   //---------------------------
   //Delete
   if ( isset($_GET["delete"]) )
    {
    $i = $_GET["delete"];
    $qty = $_SESSION["qty"][$i];
    $qty--;
    $_SESSION["qty"][$i] = $qty;
    //remove item if quantity is zero
    if ($qty == 0) {
     $_SESSION["amounts"][$i] = 0;
     unset($_SESSION["cart"][$i]);
   }
  else
   {
    $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
   }
  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#"Home></a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="order.php">Order Form</a></li>
            <li><a href="checkout.php">Checkout</a></li>
        </ul>
    </nav>
    
</body>
</html>