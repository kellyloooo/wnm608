<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "parts/meta.php";?>

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/productlist.js"></script>


    <title>Shop | Island Soapworks</title>
</head>
<body>
 <?php include "parts/navbar.php";?>

    <div class="container" id="productlist_margin">
    <div class="card soft">
       
        <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" placeholder="Search Products...">
            </form>
        </div>
        <div class="form-control display-flex flex-stretch flex-wrap">
            <div class="filter-button">
                <button data-filter="category" data-value="" type="button" class="form-button">All</button>
            </div>
            <div class="filter-button">
                <button data-filter="category" data-value="soap" type="button" class="form-button">Soap</button>
            </div>
            <div class="filter-button">
                <button data-filter="category" data-value="housework soap" type="button" class="form-button">Housework</button>
            </div>
            <div class="flex-none">
            <div class="form-select">
                <select class="js-sort">
                    <option value="1">Newest</option>
                    <option value="2">Oldest</option>
                    <option value="3">Proce Low to High</option>
                    <option value="4">Proce High to Low</option>
                </select>
            </div>
        </div>
            
        </div>


        <div class='productlist grid gap'></div>
    </div>
    </div>
    <?php include "parts/footer.php";?>
</body>
</html>