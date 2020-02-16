// JavaScript source code

function enterUser() {
    var name = document.getElementById("username").value;
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "writenewusername.php?q=" + name, true);
    xhttp.send();    
    window.location.href = "journal_menu.php";
}

function read() {    
    window.location.href = "journal_read.php";
}

function writeJournal() {    
    window.location.href = "journal_write.php";
}

function gotomenu() {
    window.location.href = "journal_menu.php";
}

function savewrite() {
    alert("Your journal entry was saved");
    window.location.href = "journal_menu.php";
}
