<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/storetheme.css">
<link rel="stylesheet" href="lib/css/styleguide.css">
 <link rel="stylesheet" href="lib/css/gridsystem.css">
    <title>Cart | Island Soapworks</title>
</head>
<body>
    <?php include "parts/navbar.php";?>

<div class="container" id="productlist">   
        <h2>Your Cart</h2>
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <?= array_reduce($cart_items,'cartListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft flat">
                    <?= cartTotals() ?>
                </div>
            </div>
        </div>


</div>

</body>
</html>