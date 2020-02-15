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
		    $id = $_SESSION["name_id"];
			echo "<p class='center fancy pad'>This is id: " . $id . "</p>";    
		    require "dbConnect.php";
            $db = get_db();			
            $statement = $db->prepare("SELECT ts FROM journal WHERE name_id = :id");
			$statement->bindValue(":id", $id, PDO::PARAM_INT);
			$statement->execute();
			$rows = $statement->fetch(PDO::FETCH_ASSOC);
			echo "<p class='center fancy pad'>This is row: " . $rows . "</p>";          
			foreach ($rows as $row)
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