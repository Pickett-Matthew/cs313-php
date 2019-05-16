<?php 
include 'start.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
</head>
<body>
    <div id="shoppingBanner" class="jumbotron">
        <h1>We sell these products</h1>
    </div>
    <?php for($i = 0; $i < count($products); $i++) { ?>

        <table>
         <tr>
            <th>Products</th>
            <th width="30px";></th>
            <th>Amount</th>
            <th width="30px";></th>
            <th>Add to cart</th>
        </tr>
        <tr>
            <td><?php echo $products[$i]; ?></td>
            <th width="30px";></th>
            <td><?php echo $amounts[$i]; ?></td>
            <th width="30px";></th>
            <td><a href="?add=<?php echo($i); ?>"><button>Add to cart</button></a></td>
            <th width="30px";></th>
        </tr>
        </table>
    
    <?php 
        }
    ?>

    <a href="order.php"><button id="Cart-btn">Continue to cart</button></a>

</body>
</html>