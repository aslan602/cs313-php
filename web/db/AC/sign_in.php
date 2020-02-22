﻿<?php

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
        <h1>Please sign in to your account</h1><br />       
    </div>
    <div class="instrucpad">
        <h3>* Passworh must be 8 charaters</h3><br /><br />
    </div>
    <div class="formpad">
        <form action="check4account.php" method="post">
            <label for="signinname">Username</label>
            <input type="text" id="signinname" name="signinname" /><br /><br />
            <label for="signinpwd">Password</label>
            <input type="password" name="signinpwd" id="signinpwd" minlength="8" /><br /><br />
            <input class="ex1" type="submit" value="Sign In" /><br /><br />
        </form>
    </div>
    <div class="createpad">
        <h1>or create a new account</h1><br />
    </div>
    <div class="centerbutton">
        <input class="ex1" type="button" value="Create Account" id="createaccount" name="createaccount" onclick="createaccount()" />
    </div>

</body>
</html>