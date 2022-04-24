<?php

include_once "lib/php/function.php";

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
             <div class="card soft flat">
                 <div class="card-section">
                 <h2 class="title"><?= $product->name ?></h2>
                 <p class="product-price">&dollar;<?= $product->price ?></p>
                 <p class="product-description"><?= $product->description ?></p>
                </div>

                <div class="card-section">
                    <label for="product-amount" class="form-label">Amount</label>
                <div class="form-select" id="product-amount">
                <select>
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

                <div>
                    <a href="product-added.php?id=<?= $product->id ?>" class="form-button">Add to Cart</a> 
                </div>
             </div>
         </div>
        </div>
    </div>

 
</body>
</html>