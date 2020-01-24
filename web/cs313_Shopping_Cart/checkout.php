<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Essential Supplies Checkout</title>
    <link rel="stylesheet" type="text/css" href="shoppingCart.css">
    <script src="shoppingCart.js"></script>
</head>
<body>
	<form method="POST" action="confirmation.php">
    <header class="header">
        <span class="col-3 corner">
            <img src="logo.png" alt="logo" />
        </span>
        <p class="col-6">Essential Supplies</p>
        <span class="col-3 corner">
            <input class="button" type="button" value="Return to Cart" onclick="goToCart()" />
            <input class="button" type="submit" value="Confirmation" />
        </span>
    </header>
	
		<div class="col-5 item">
			<h1>Please enter your address for shipping:</h1>
		</div>
		<div class="col-6 supercorner">
			<input class="address" type="text" id="address" name="address" />
		</div>
	</form>
</body>
</html>