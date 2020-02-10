<?php
   session_start();
   $tempname = $_REQUEST["q"];
   $_SESSION["username"] = $tempname;
   header('journal_menu.php');
?>
