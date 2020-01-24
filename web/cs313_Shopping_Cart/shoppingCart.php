<?php
    session_start();	
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Essential Supplies Shopping</title>
    <link rel="stylesheet" type="text/css" href="shoppingCart.css">
    <script src="shoppingCart.js"></script>
</head>
<body>
    <header class="header">
        <span class="col-3 corner">
            <img src="logo.png" alt="logo" />
        </span>
        <p class="col-6">Essential Supplies</p>
        <span class="col-3 corner">
            <input class="button" type="button" value="Go To Cart" onclick="goToCart()" />
        </span>
    </header>
    <div>
        <br /><br /><br />
    </div>
    <div class="col-3">
        <img class="itemPic" src="hoverBoard.png" alt="Hover Board" />
    </div>
    <div class="col-6 item">
        <p>A Spectromatic Hoverboard</p>
    </div>
    <div class="col-3 centerButton">
        <input class="itemButton" type="button" value="Add To Cart" onclick="addHoverBoard()" />
    </div>
    <div>
        <p>___________________________________________________________________________________________________________________________________________________</p>
    </div>
    <div class="col-3">
        <img class="itemPic" src="hoverBike.jpg" alt="Hover Bike" />
    </div>
    <div class="col-6 item">
        <p>A Spectromatic Hoverbike</p>
    </div>
    <div class="col-3 centerButton">
        <input class="itemButton" type="button" value="Add To Cart" onclick="addHoverBike()" />
    </div>
    <div>
        <p>___________________________________________________________________________________________________________________________________________________</p>
    </div>
    <div class="col-3">
        <img class="itemPic" src="hoverCar.png" alt="Hover Car" />
    </div>
    <div class="col-6 item">
        <p>A Spectromatic HoverCar</p>
    </div>
    <div class="col-3 centerButton">
        <input class="itemButton" type="button" value="Add To Cart" onclick="addHoverCar()" />
    </div>
    <div>
        <p>___________________________________________________________________________________________________________________________________________________</p>
    </div>
    <div class="col-3">
        <img class="itemPic" src="jetPack.jpg" alt="JetPack" />
    </div>
    <div class="col-6 item">
        <p>A Spectromatic JetPack</p>
    </div>
    <div class="col-3 centerButton">
        <input class="itemButton" type="button" value="Add To Cart" onclick="addJetPack()" />
    </div>
    <div>
        <p>___________________________________________________________________________________________________________________________________________________</p>
    </div>
    <div class="col-3">
        <img class="itemPic" src="flyingSaucer.jpg" alt="Flying Saucer" />
    </div>
    <div class="col-6 item">
        <p>A Personal Flying Saucer</p>
    </div>
    <div class="col-3 centerButton">
        <input class="itemButton" type="button" value="Add To Cart" onclick="addFlyingSaucer()" />
    </div>
    <div>
        <p>___________________________________________________________________________________________________________________________________________________</p>
    </div>
    <div class="col-3">
        <img class="itemPic" src="transporter.jpg" alt="Partical Transporter" />
    </div>
    <div class="col-6 item">
        <p>A Partical Transporter</p>
    </div>
    <div class="col-3 centerButton">
        <input class="itemButton" type="button" value="Add To Cart" onclick="addTransporter()" />
    </div>
    <div>
        <p>___________________________________________________________________________________________________________________________________________________</p>
    </div>
    <div class="col-3">
        <img class="itemPic" src="freighter.jpg" alt="Space Freighter" />
    </div>
    <div class="col-6 item">
        <p>A Class B Space Freighter</p>
    </div>
    <div class="col-3 centerButton">
        <input class="itemButton" type="button" value="Add To Cart" onclick="addFreighter()" />
    </div>
    <div>
        <p>___________________________________________________________________________________________________________________________________________________</p>
    </div>
    <div class="col-3">
        <img class="itemPic" src="cruiser.jpg" alt="Battle Cruiser" />
    </div>
    <div class="col-6 item">
        <p>A Class A Space Battlecruiser</p>
    </div>
    <div class="col-3 centerButton">
        <input class="itemButton" type="button" value="Add To Cart" onclick="addCruiser()" />
    </div>
</body>
</html>