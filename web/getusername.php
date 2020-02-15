<?php
   session_start();
   $tempname = htmlspecialchars($_REQUEST["q"]);
   if ($tempname == null) {
       echo "ERROR ENTERING NAME!";
   	   die();
   }
   $_SESSION["username"] = $tempname;
   require "dbConnect.php";
   $db = get_db();
   $tname = "'" . $tempname . "'";
   $statement = $db->prepare("INSERT INTO names (username) VALUES (:newname)");
   $statement->bindValue(":newname", $tname, PDO::PARAM_STR);
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
    <body  onload= "gotomenu()">
	 
	</body>
	</html>
