<?php
   start_session();
   $timestamp = $_REQUEST["q"];
   $_SESSION["timestamp"] = $timestamp;
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Journal Past Entries</title>
    <link rel="stylesheet" type="text/css" href="journal.css">
    <script src="journal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="heading col-6">
        Journal
    </div>
    <div class="fancy col-6 littlePad">Journal Entry for Time Stamp " <?php echo $_SESSION['timestamp'] ?></div>
    <div class="col-9 namelist">
       <?php
          $timestamp = $_SESSION["timestamp"];
          require "dbConnect.php";
          $db = get_db();
          $statement = $db->prepare("SELECT entry FROM journal WHERE ts = ?");
          $statement->execute([$timestamp]);
		  &entry = $statement->fetch(PDO::FETCH_ASSOC);
          echo "<p class='namelist'>" . $entry . "</p>";
       ?>
    </div>

</body>
</html>