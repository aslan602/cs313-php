// JavaScript source code

function enterUser() {
    var name = document.getElementById("username").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "getusername.php?q=" + name, true);
    xhttp.send();
    alert("The user was entered!");
    window.location.href = "journal_menu.php";
}

function read() {
    alert("The read was entered!");
    window.location.href = "journal_read.php";
}

function writeJournal() {
    alert("The write was entered!");
    window.location.href = "journal_write.php";
}

function gotomenu() {
    window.location.href = "journal_menu.php";
}