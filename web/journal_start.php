<?php
   session_start();

   require "dbConnect.php";
   $db = get_db();
   $statement = $db->prepare("SELECT username FROM names");
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
    <body>
        <div class="headingStart col-8">
            Journal
        </div>
        <div class="col-6">
<p class="center fancy pad">Please select a user:</p>
    </div>
<div class="col-4 center fancy">
    OR enter a new user: <br />
    <input class="entername" type="text" id="username" />
    <br />
    <input type="button" value="Enter Name" class="button ex1" onclick="enterUser()" />
</div>
<div class="col-4 namelist">
    <?php
    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
       $username = $row['username'];
       echo "<a href='https://powerful-basin-71330.herokuapp.com/getusername.php?q=$username' >" . $username . "</a><br />";
    }
    ?>

</div>
<div class="col-2 namelist">

</div>

</body>
</html>