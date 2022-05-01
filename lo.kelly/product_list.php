<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "parts/meta.php";?>
    <title>Shop | Island Soapworks</title>
</head>
<body>
 <?php include "parts/navbar.php";?>

    <div class="container" id="productlist">
    <div class="card soft">
       
        <?php

        include_once "lib/php/function.php";
        include_once "parts/templates.php";

        $result = makeQuery(
            makeConn(),
            "SELECT * FROM `products` ORDER BY `date_create` ASC");

        echo "<div class='productlist grid gap'>",array_reduce($result,'productListTemplate'),"</div>";
    
        ?>

    </div>
    </div>
    <?php include "parts/footer.php";?>
</body>
</html>