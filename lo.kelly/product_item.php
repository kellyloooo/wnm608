<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "parts/meta.php";?>
    <title>Soap | Island Soapworks</title>
</head>
<body>

<?php include "parts/navbar.php";?>

    <div class="container" id="productitem">
        <div class="card soft">
            <h2>Soap</h2>

          <p>This is soap # <?= $_GET['id']?></p>
          <p><a href="product-added.php">Add to Cart</a></p>
        </div>
    </div>
</body>
</html>