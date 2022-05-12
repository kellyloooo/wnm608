<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

//print_p($product);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "parts/meta.php";?>
    <title>Soap | Island Soapworks</title>
</head>
<body>

<?php include "parts/navbar.php";?>

    <div class="container" id="productitem">
        <div class="grid gap">
         <div class="col-xs-12 col-md-7">
             <div class="card soft">
                <div class="images-main">
                 <img src="img/<?= $product->images ?>">
                </div>
             </div>
         </div>
         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">

                <input type="hidden" name="product-id" value="<?= $product->id ?>">

                <div class="card-section">
                 <h2 class="title"><?= $product->name ?></h2>
                 <p class="product-price">&dollar;<?= $product->price ?></p>
                 <p class="product-description"><?= $product->description ?></p>
                </div>

                <div class="card-section">
                    <label for="product-amount" class="form-label">Amount</label>
                    <div class="form-select">
                        <select id="product-amount" name="product-amount">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                         </select>
                    </div>
                </div>

                <div class="card-section">
                    <input type="submit" class="form-button" value="Add to Cart"> 
                </div>
            </form>
         </div>
        </div>

        <div class="card soft">
        <h2>Recommended Products</h2>
        <?php
        recommendedSimilar($product->category,$product->id);
        ?>
        </div>
    </div>

 
</body>
</html>