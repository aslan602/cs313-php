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

function createaccount() {
    window.location.href = "create.php";
}

function signin() {
    window.location.href = "sign_in.php";
}

function returntomenu() {
    window.location.href = "journal_menu.php";
}
