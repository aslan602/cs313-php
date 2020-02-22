<?php
   session_start();


$badLogin = false;

if (isset($_POST['signinname']) && isset($_POST['signinpwd']))
{	
	$username = $_POST['signinname'];
	$password = $_POST['signinpwd'];

	// Connect to the DB
	require("dbConnect.php");
	$db = get_db();

	/*********************************************************************
	* QUERY STATEMENT
	* This is the query statement that needs to change for each different
	* program with a different table.
	*********************************************************************/

	$query = 'SELECT password FROM journalaccounts WHERE username=:username';

	/*********************************************************************
	* QUERY STATEMENT END
	*********************************************************************/

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];

		if (password_verify($password, $hashedPasswordFromDB))
		{			
			$_SESSION['username'] = $username;
	/***************************************************************************
	* CHANGE THIS TOO! THE REDIRECT TO THE CORRECT START PAGE!
	**************************************************************************/
			header("Location: journal_menu.php");
			die(); 
		}
		else
		{
			$badLogin = true;
		}

	}
	else
	{
		$badLogin = true;
	}
}

if ($badLogin)
{   
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
        <h1>Incorrect Password.  Please try again.</h1><br />       
    </div>
     <div class="centerbutton">
        <input class="ex1" type="button" value="Continue" id="continue" name="continue" onclick="continue()" />
    </div>
   </body>
   </html>

   <?php
}


header("Location: sign_in.php");
die();

?>

