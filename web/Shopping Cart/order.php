<?php 
include 'start.php'
?>

<div id="shoppingBanner" class="jumbotron">
<h1>You Order</h1>
</div>
<table>
    <tr>
        <th>Products</th>
        <th width="30px";></th>
        <th>Amount</th>
        <th width="30px";></th>
        <th>Add to cart</th>
        <th width="30px";></th>
    </tr>

    <?php 
        $total=0;
        foreach($_SESSION['cart'] as $i){ 
    ?>
    <tr>
        <td><?php echo ($products[$_SESSION['cart'][$i]]); ?></td>
        <th width="30px";></th>
        <td><?php echo ($_SESSION['qty'][$i]); ?></td>
        <th width="30px";></th>
        <td><?php echo ($_SESSION['amounts'][$i]); ?></td>
        <th width="30px";></th>
        <td><a href="?delete=<?php echo($i); ?>"><button>Delete</button></a></td>
    </tr>
    <?php 
        $total = $total + $_SESSION['amounts'][$i];
        }
        $_SESSION['total'] = $total;
    ?>
    <tr>
        <td>Total: <?php echo ($total); ?></td>
    </tr>
    </table>
    <table>
        <tr>
            <td colspan="5"><a href="?reset=true"><button type="button" class="btn-sm btn-danger">Reset</button></a></td>
            <td colspan="5"><a href="shop.php"><button type="button" class="btn-sm btn-primary">Keep Shopping</button></a></td>
            <td colspan="5"><a href="checkout.php"><button type="button" class="btn-sm btn-primary">Check Out</button></a></td>
        </tr>
    </table>