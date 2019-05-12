<?php 
include 'start.php'
?>
<div id="shoppingBanner" class="jumbotron">
<h1>Checkout</h1>
</div>

<?php 
    if(isset($_SESSION['cart']))
?> 
<table>
    <tr>
        <th>Product</th>
        <th width="30px";></th>
        <th>Quantity</th>
        <th width="30px";></th>
        <th>Amount</th>
        <th width="30px";></th>
    </tr>
<?php 
$total = 0;
foreach($_SESSION['cart'] as $i) {
?>
<tr>
    <td><?php echo $product($_SESSION['cart'][$i]); ?></td>
    <th width="30px";></th>
    <td><?php echo $products($_SESSION['qty'][$i]); ?></td>
    <th width="30px";></th>
    <td><?php echo $products($_SESSION['amounts'][$i]); ?></td>
    <th width="30px";></th>
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
        <td><a href="confirmation.php"><button id="Cart-btn">Confirm Purchase</button></a></td>
    </tr>
</table>
