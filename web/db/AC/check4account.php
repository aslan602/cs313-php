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
   header("Location: incorrect.php");
   die();
}


header("Location: sign_in.php");
die();

?>

