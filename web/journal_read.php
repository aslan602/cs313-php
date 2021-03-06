﻿<?php
   session_start();
?>



<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Journal Entry Selection</title>
    <link rel="stylesheet" type="text/css" href="journal.css">
    <script src="journal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="readheading">
        Journal
    </div>	
    <div class="timelistpad">
        <p class="fancy">Hello <?php echo $_SESSION['username']; ?><br />Please select a journal entry to read<br /></p>
		<?php
		    $id = $_SESSION["name_id"];			
		    require "dbConnect.php";
            $db = get_db();			
            $statement = $db->prepare("SELECT ts FROM journal WHERE name_id = :id");
			$statement->bindValue(":id", $id, PDO::PARAM_INT);
			$statement->execute();
			$rows = $statement->fetchAll();			         
			foreach ($rows as $row)
            {
               $timestamp = $row['ts'];
               echo "<a class='timestamp' href='https://powerful-basin-71330.herokuapp.com/journal_readentry.php?q=$timestamp' >" . $timestamp . "</a><br />";
            }			
        ?>
    </div>      
</body>
</html>