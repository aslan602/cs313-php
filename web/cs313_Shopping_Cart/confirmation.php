
<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Essential Supplies Confirmation Page</title>
    <link rel="stylesheet" type="text/css" href="shoppingCart.css">
    <script src="shoppingCart.js"></script>
</head>
<body>
    <header class="header">
        <span class="col-3 corner">
            <img src="logo.png" alt="logo" />
        </span>
        <p class="col-6">Essential Supplies</p>      
    </header>	
	<div class="col-5 item">
		<h3>The address your items are being shipped (excludes Battlecruiser):</h3>
	</div>
	<div class="col-6 supercorner item">		
		<?php
		$address = htmlspecialchars($_POST["address"]);
		if (isset($address)) {
			echo "<h3>" . $address . "<h3>";
		}
		?>		
	</div>
	<div>
		<p>___________________________________________________________________________________________________________________________________________________</p>
	</div>

	<?php // Check for hoverboard ?>
	<?php
	if (isset($_SESSION["hoverboard"])) {
		if ($_SESSION["hoverboard"] == "true") {
		?>
		 <div>
			<br /><br /><br />
		</div>
		<div class="col-3">
			<img class="itemPic" src="hoverBoard.png" alt="Hover Board" />
		</div>
		<div class="col-6 item">
			<p>A Spectromatic Hoverboard</p>
		</div>		
		<div>
			<p>___________________________________________________________________________________________________________________________________________________</p>
		</div>
	<?php
		}
	}
	?>

	<?php // Check for hoverbike ?>
	<?php
	if (isset($_SESSION["hoverbike"])) {
		if ($_SESSION["hoverbike"] == "true") {
		?>
		 <div>
			<br /><br /><br />
		</div>
		<div class="col-3">
			<img class="itemPic" src="hoverBike.jpg" alt="Hover Bike" />
		</div>
		<div class="col-6 item">
			<p>A Spectromatic Hoverbike</p>
		</div>		
		<div>
			<p>___________________________________________________________________________________________________________________________________________________</p>
		</div>
	<?php
		}
	}
	?>
	
	<?php // Check for hovercar ?>
	<?php
	if (isset($_SESSION["hovercar"])) {
		if ($_SESSION["hovercar"] == "true") {
		?>
		 <div>
			<br /><br /><br />
		</div>
		<div class="col-3">
			<img class="itemPic" src="hoverCar.png" alt="Hover Car" />
		</div>
		<div class="col-6 item">
			<p>A Spectromatic Hovercar</p>
		</div>		
		<div>
			<p>___________________________________________________________________________________________________________________________________________________</p>
		</div>
	<?php
		}
	}
	?>

	<?php // Check for jetpack ?>
	<?php
	if (isset($_SESSION["jetpack"])) {
		if ($_SESSION["jetpack"] == "true") {
		?>
		 <div>
			<br /><br /><br />
		</div>
		<div class="col-3">
			<img class="itemPic" src="jetpack.jpg" alt="JetPack" />
		</div>
		<div class="col-6 item">
			<p>A Spectromatic JetPack</p>
		</div>		
		<div>
			<p>___________________________________________________________________________________________________________________________________________________</p>
		</div>
	<?php
		}
	}
	?>

	<?php // Check for Flying Saucer ?>
	<?php
	if (isset($_SESSION["saucer"])) {
		if ($_SESSION["saucer"] == "true") {
		?>
		 <div>
			<br /><br /><br />
		</div>
		<div class="col-3">
			<img class="itemPic" src="flyingSaucer.jpg" alt="Flying Saucer" />
		</div>
		<div class="col-6 item">
			<p>A Personal Flying Saucer</p>
		</div>		
		<div>
			<p>___________________________________________________________________________________________________________________________________________________</p>
		</div>
	<?php
		}
	}
	?>

	<?php // Check for Transporter ?>
	<?php
	if (isset($_SESSION["transporter"])) {
		if ($_SESSION["transporter"] == "true") {
		?>
		 <div>
			<br /><br /><br />
		</div>
		<div class="col-3">
			<img class="itemPic" src="transporter.jpg" alt="Partical Transporter" />
		</div>
		<div class="col-6 item">
			<p>A Partical Transporter</p>
		</div>		
		<div>
			<p>___________________________________________________________________________________________________________________________________________________</p>
		</div>
	<?php
		}
	}
	?>

	<?php // Check for Space Freighter ?>
	<?php
	if (isset($_SESSION["freighter"])) {
		if ($_SESSION["freighter"] == "true") {
		?>
		 <div>
			<br /><br /><br />
		</div>
		<div class="col-3">
			<img class="itemPic" src="freighter.jpg" alt="Space Freighter" />
		</div>
		<div class="col-6 item">
			<p>A Class B Space Freighter</p>
		</div>		
		<div>
			<p>___________________________________________________________________________________________________________________________________________________</p>
		</div>
	<?php
		}
	}
	?>

	<?php // Check for Battle Cruiser ?>
	<?php
	if (isset($_SESSION["cruiser"])) {
		if ($_SESSION["cruiser"] == "true") {
		?>
		 <div>
			<br /><br /><br />
		</div>
		<div class="col-3">
			<img class="itemPic" src="cruiser.jpg" alt="Battle Cruiser" />
		</div>
		<div class="col-6 item">
			<p>A Class A Space Battlecruiser</p>
		</div>		
		<div>
			<p>___________________________________________________________________________________________________________________________________________________</p>
		</div>
	<?php
		}
	}
	?>
</body>
</html>