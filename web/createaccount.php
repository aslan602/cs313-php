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


header("Location: sign_in.php");
die();
?>