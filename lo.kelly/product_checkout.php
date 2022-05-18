<?php
include_once "lib/php/function.php";
include_once "parts/templates.php";
$cart = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/storetheme.css">
<link rel="stylesheet" href="lib/css/styleguide.css">
 <link rel="stylesheet" href="lib/css/gridsystem.css">
    <title>Checkout | Island Soapworks</title>
</head>
<body>
    <?php include "parts/navbar.php";?>
<div class="container" id="productlist_margin">
    <div class="grid gap">

    <div class="col-xs-12 col-md-5">
        <div class="card soft">
        <h2>Item Review</h2>
            <div class="card-section">
            <?php
            echo array_reduce($cart,function($r,$o){
                $totalfixed = number_format($o->total,2,'.','');
                return $r."<div class='display-flex'>
                <div class='flex-stretch'>$o->name</div>
                <div class='flex-none'>&dollar;$totalfixed</div>
                </div>";
            }) ?>
            </div>
            <?= cartTotals(); ?>
        </div>
    </div>

        <div class="col-xs-12 col-md-7">
    <div class="card soft">
        <h2 class="title">Checkout</h2>

        <form class="form">
        <h3 class="sub-title">Contact Information</h3>
            <div class="form-control">
                <div class="grid gap">
                    <div class="col-xs-12 col-md-6">
                        <label for="contact-firstname" class="form-label">First Name</label>
                        <input id="contact-firstname" type="text" placeholder="First Name" class="form-input">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="contact-lastname" class="form-label">Last Name</label>
                        <input id="contact-lastname" type="text" placeholder="Last Name" class="form-input">
                    </div>
                </div>
            </div>
            <div class="form-control">
                <div class="grid gap">
                    <div class="col-xs-12 col-md-6">
                        <label for="contact-email" class="form-label">Email</label>
                        <input id="contact-email" type="text" placeholder="Email" class="form-input">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="contact-phone" class="form-label">Phone Number</label>
                        <input id="contact-phone" type="text" placeholder="Phone Number" class="form-input">
                    </div>
                </div>
            </div>
            
            <h3 class="sub-title">Shipping</h3>
                <div class="form-control">
                    <label for="address-street" class="form-label">Street</label>
                    <input id="address-street" type="text" placeholder="Street" class="form-input">
                </div>
                <div class="form-control">
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-6">
                        <label for="address-city" class="form-label">City</label>
                        <input id="address-city" type="text" placeholder="City" class="form-input">
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <label for="address-state" class="form-label">State</label>
                        <input id="address-state" type="text" placeholder="State" class="form-input">
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-6">
                        <label for="address-zip" class="form-label">Zip Code</label>
                        <input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <label for="address-country" class="form-label">Country</label>
                        <input id="address-country" type="text" placeholder="Country" class="form-input">
                        </div>
                    </div>
                </div>

                <h3 class="sub-title">Payment</h3>
                <div class="form-control">
                    <label for="payment-number" class="form-label">Card Number</label>
                    <input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
                </div>
                <div class="form-control">
                    <label for="payment-name" class="form-label">Cardholder Name</label>
                    <input id="payment-name" type="text" placeholder="Name" class="form-input">
                </div>
                <div class="form-control">
                    <div class="grid gap">
                        <div class="col-xs-12 col-md-6">
                        <label for="payment-expiration" class="form-label">Exp. Date</label>
                        <input id="payment-expiration" type="text" placeholder="MM / YY" class="form-input">
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <label for="payment-cvv" class="form-label">CVV</label>
                        <input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
                        </div>
                    </div>
                </div>
                <div class="form-control">
                    <a href="product_confirm.php" class="form-button">Complete Checkout</a>
                </div>
        </form>
    </div>      
    </div>

    </div>
</div>


    <?php include "parts/footer.php";?>

</body>
</html>