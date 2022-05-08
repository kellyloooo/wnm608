<?php

include_once "lib/php/function.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

//$cart_product = array_find(getCart(),function($o){return $o->id==$_GET['id'];});
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/storetheme.css">
<link rel="stylesheet" href="lib/css/styleguide.css">
 <link rel="stylesheet" href="lib/css/gridsystem.css">
    <title>Confirmation | Island Soapworks</title>
</head>
<body>
    <?php include "parts/navbar.php";?>

<div class="container" id="productlist_margin">
    <div class="card soft">
        <h2 class="title"><?= $product->name ?> Added to Your Cart</h2>
        
        <div class="display-flex">
            <div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
            <div class="flex-stretch"></div>
            <div class="flex-none"><a href="product_cart.php">Go to Cart</a></div>
        </div>
    </div>
</div>

</body>
</html>