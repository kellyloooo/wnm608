<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();
$cart = getCart();
    
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

<div class="container" id="productlist_margin">   
        <h2>Your Cart</h2>

        <?php
        if(count($cart)){
            ?>
            <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <?= array_reduce($cart_items,'cartListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft flat">
                    <?= cartTotals() ?>
                    <div class="card-section">
                     <a href="product_checkout.php" class="form-button">Checkout</a>
                    </div>
                </div>
            </div>
        </div>       
        <?php 
        } else{
            ?>
            <div class="card soft">
            <p>No Item in Cart</p>
            </div>

            <h3>Recommendations</h3>
            <?php recommendedAnything(6); ?>
           
            <?php

        }
        ?>

       
</div>

</body>
</html>