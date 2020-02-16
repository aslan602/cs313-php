<?php
   session_start();
   if ($_SESSION["username"] == null) {
   	   echo "ERROR! NO USER NAME IN WRITE!";
	   die();
   }
    if ($_SESSION["name_id"] == null) {
   	   echo "ERROR! NO USER ID IN WRITE!";
	   die();
   }
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Journal Writing</title>
    <link rel="stylesheet" type="text/css" href="journal.css">
    <script src="journal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="heading col-8">
        Journal
    </div>
	 <div class="col-8 fancy biggerpad">
        <p>Hello <?php echo $_SESSION['username']; ?><br />Write you journal entry then press save.<br /></p>
	</div>
    <div class="col-6 timestamppad">
	   <form action="write_to_journal.php" method="post">
	      <textarea name="entry" rows="30" cols="75" id="write"></textarea>
		  <p><br /></p>
		  <input class="button ex1" type="button" value="SAVE" onclick="gotowrite()">
	   </form>
        

    </div>

</body>
</html>