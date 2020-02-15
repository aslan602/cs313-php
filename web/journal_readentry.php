<?php
   session_start();
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
    <div class="heading col-8">
        Journal
    </div>
    <div class="fancy col-8 timestamppad">Journal Entry for Time Stamp: <?php echo $_SESSION['timestamp'] ?></div>
    <div class="col-6 entryreadout">
       <?php
          $timestamp = $_SESSION["timestamp"];
		  if ($timestamp == null) {
		  	  echo "ERROR SETTING TIMESTAMP!";
			  die();
		  }
          require "dbConnect.php";
          $db = get_db();
		  //$timestamp = "'" . $timestamp . "'";
		  echo "Timestamp is now: " . $timestamp;
          $statement = $db->prepare("SELECT entry FROM journal WHERE ts = :timest");
		  $statement->bindValue(":timest", $timestamp, PDO::PARAM_STR);
          $statement->execute();
		  $rows = $statement->fetchAll();
		  if ($rows == null) {
		  	  echo "Timestamp ROWS is not set!";
			  die();
		  }
		  echo "Rows is: " . $rows;
		  foreach ($rows as $row) {
		     $entry = $row["entry"];
             echo "<p> $entry </p>";
		  }
		  
       ?>
    </div>

</body>
</html>