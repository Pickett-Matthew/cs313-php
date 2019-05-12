<?php 
include 'start.php'
?>
<div id="shoppingBanner" class="jumbotron">
<h1>Thanks for Paying</h1>
</div>
<?php
if ( isset($_SESSION["cart"]) ) {
?>


<?php
$total = 0;
foreach ( $_SESSION["cart"] as $i ) {
?>

<?php
$total = $total + $_SESSION["amounts"][$i];
}
$_SESSION["total"] = $total;
?>

<h1>Total : <?php echo($total); ?></h1>

<?php
}
?>