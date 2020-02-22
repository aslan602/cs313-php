<?php
$username = $_POST['signinname'];
$password = $_POST['signinpwd'];


if (!isset($username) || $username == ""
	|| !isset($password) || $password == "")
{	
	header("Location: create.php");
	die(); 
}

$username = htmlspecialchars($username);

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

require("dbConnect.php");
$db = get_db();

/**************************************************************
* QUERY STATEMENT
* This is the query statement to change for each different 
* program table being used for each program
***************************************************************/

$query = "INSERT INTO journalaccounts (username, password) VALUES (:username, :password)";

/***************************************************************
* QUERY STATEMENT END
***************************************************************/
$statement = $db->prepare($query);
$statement->bindValue(':username', $username);
$statement->bindValue(':password', $hashedPassword);
$statement->execute();
?>

<!DOCTYPE html>

   <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
   <head>
       <meta charset="utf-8" />
       <title>Sign-in Page</title>
       <link rel="stylesheet" type="text/css" href="sign_in.css">
       <script src="sign_in.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

   </head>
   <body>
    <div class="middletop toppad">
        <h1>Account Created Successfully.  Please sign-in to continue.</h1><br />       
    </div>
     <div class="centerbutton">
        <input class="ex1" type="button" value="Continue" id="continue" name="continue" onclick="carryon()" />
    </div>
   </body>
   </html>
