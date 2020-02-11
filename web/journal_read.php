<?php
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
    <div class="heading col-8">
        Journal
    </div>    
    <div class="col-8">
        <p class="center fancy pad">Hello <?php echo $_SESSION['username']; ?><br />Please select a journal entry to read<br /></p>
		<?php
		    require "dbConnect.php";
            $db = get_db();
			$name = "'" . $_SESSION['username'] . "'";
            $statement = $db->prepare("SELECT name_id, username FROM names WHERE username = ?");
			$statement->bindValue(1, $name, PDO::PARAM_STR);
			$statement->execute();
			$row = $statement->fetch(PDO::FETCH_ASSOC);
			echo "<p class='center fancy pad'>This is row: " . $row . "</p>";
			$nameId = $row['name_id'];
			

			echo "<p class='center fancy pad'>This is name: " . $name . " and this is id: " . $nameId . "</p>";
			$statement = $db->prepare("SELECT ts FROM journal WHERE name_id = ?");
            $statement->execute([$nameId]);
			while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $timestamp = $row['ts'];
               echo "<a class='button center' href='https://powerful-basin-71330.herokuapp.com/journal_readentry.php?q=$timestamp' >" . $timestamp . "</a><br />";
            }			
        ?>
    </div>
    <div class="col-5 read">
       
    </div>    
</body>
</html>