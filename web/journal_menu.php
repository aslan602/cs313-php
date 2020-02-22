<?php
   session_start();

  
   if ($_SESSION["username"] == null) { //session variable is set or die!
   	   echo "ERROR GETTING NAME!";
	   die();
   }
   require "dbConnect.php";
   $officalname = $_SESSION["username"]; //get the username and assign it to a variable to use later
   $db = get_db();
   $statement = $db->prepare("SELECT id FROM journalaccounts WHERE username = :officalname"); //get the correct name_id from the username
   $fullname = "'" . $officalname . "'";  //Put quotes around the name for the database
   $statement->bindValue(":officalname", $officalname, PDO::PARAM_STR);
   $statement->execute();
   $row = $statement->fetch(PDO::FETCH_ASSOC);
   $_SESSION["name_id"] = $row["id"];  //after getting the name-id from the database, assign it to a session variable
   if ($_SESSION["name_id"] == null) {
   	   echo "ERROR CREATING NAME ID!";
	   die();
   }
?>




<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Journal Menu Page</title>
    <link rel="stylesheet" type="text/css" href="journal.css">
    <script src="journal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="heading col-6">
        Journal
    </div>
    <div class="fancy col-6 littlePad">Journal Menu:<br />Please select an activity<br /></div> 
    <div class="col-6">
        <p class="center fancy pad">Hello <?php echo $_SESSION['username']; ?><br /></p>
    </div>
    <div class="col-2 buttonpad">
        <input type="button" value="Write in Journal" class="button ex1" onclick="writeJournal()" />
    </div>
    <div class="col-2">
        <input type="button" value="Read Journal Entries" class="button ex1" onclick="read()" />
    </div>
</body>
</html>