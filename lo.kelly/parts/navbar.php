<?php 

include "parts/meta.php";
include_once "lib/php/function.php";

?>
<header class="navbar">
    <div class="container display-flex">
        <div class="flex-none">
           <a href="index.php"> <img src="img/logo_white.png" alt="logo"></a>
        </div>
        <div class="flex-stretch"></div>
        <nav class="nav nav-flex flex-none">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product_list.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="product_cart.php">
                    <span>Cart</span>
                    <span class="badge"><?= makeCartBadge(); ?></span>
                </a></li>
            </ul>
        </nav>
    </div>
</header>