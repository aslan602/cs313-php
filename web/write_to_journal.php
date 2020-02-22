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
   $post = $_POST["entry"];  
   $journalentry = htmlspecialchars($post);   
   if ($journalentry == null) {
   	   echo "ERROR GETTING ENTRY FROM WRITE!";
	   die();
   }   
   $name = $_SESSION["username"];
   $id = $_SESSION["name_id"];
   $entry = "'" . $journalentry . "'";

   require "dbConnect.php";
          $db = get_db();		  
          $statement = $db->prepare("INSERT INTO journal (name_id, entry, ts) VALUES (:id, :entry, now())");
		  $statement->bindValue(":id", $id, PDO::PARAM_INT);
		  $statement->bindValue(":entry", $entry, PDO::PARAM_STR);
          $statement->execute();
?>

 <!DOCTYPE html>

    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Journal Start Page</title>
        <link rel="stylesheet" type="text/css" href="journal.css">
        <script src="journal.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	 <div class="headingStart col-8">
            Journal
        </div>
        <div class="col-6">
           <p class="center fancy pad">Journal entry saved successfully!</p><br /> <br />
        </div>
		<div class="col-12 biggestpad">
		   <input type="button" value="Continue" class="button ex1" onclick="returntomenu()" /><br /><br />
		</div>

	</body>
	</html>