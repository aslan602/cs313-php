<?php
 session_start();
   $tempname = htmlspecialchars($_REQUEST["q"]);
   if ($tempname == null) {
       echo "ERROR ENTERING NAME!";
   	   die();
   }
   $_SESSION["username"] = $tempname;
   
   if ($_SESSION["username"] == null) { //session variable is set or die!
   	   echo "ERROR GETTING NAME!";
	   die();
   }
   require "dbConnect.php";
   $db = get_db();   
   $statement = $db->prepare("INSERT INTO names (username) VALUES (:newname)");
   $statement->bindValue(":newname", $tempname, PDO::PARAM_STR);
   $statement->execute();
?>
