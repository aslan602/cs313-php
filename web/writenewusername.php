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
