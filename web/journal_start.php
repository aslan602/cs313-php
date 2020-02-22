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
           <p class="center fancy pad">Please select an action:</p><br /> <br />
        </div>
		<div class="col-12">
		   <br />
		</div>
		
		<div class="col-2 biggerpad">
		   <input type="button" value="Create Account" class="button ex1" onclick="createaccount()" />
		</div>
		<div class="col-2 buttonpad">
		   <input type="button" value="Sign In" class="button ex1" onclick="signin()" />
		</div>


    </body>
    </html>