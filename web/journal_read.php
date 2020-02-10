<?php
   session_start();
?>



<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Journal Reading Page</title>
    <link rel="stylesheet" type="text/css" href="journal.css">
    <script src="journal.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="heading col-6">
        Journal
    </div>
    <div class="fancy col-6 littlePad">Journal Entry:</div>
    <div class="col-6">
        <p class="center fancy pad">Hello <?php echo $_SESSION['username']; ?><br />Please select a journal entry to read<br /></p>
    </div>
    <div class="col-5 read">
        <?php
           
        ?>

    </div>    
</body>
</html>