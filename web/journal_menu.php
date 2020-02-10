<?php
   session_start();

   If ($_SESSION["username"] == null) {
      $name = $_REQUEST["q"];
      $_SESSION['username'] = $name;
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