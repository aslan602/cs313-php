function getTime() {    
    var t = new Date();
    var hours = t.getHours();
    var minutes = t.getMinutes();
    var m;
    if (hours > 12) {
        m = "PM";
        hours = hours - 12;
    }
    else {
        m = "AM";
    }
    if (minutes < 10) {
        switch (minutes) {
            case 0:
                minutes = "00";
                break;
            case 1:
                minutes = "01";
                break;
            case 2:
                minutes = "02";
                break;
            case 3:
                minutes = "03";
                break;
            case 4:
                minutes = "04";
                break;
            case 5:
                minutes = "05";
                break;
            case 6:
                mintues = "06";
                break;
            case 7:
                minutes = "07";
                break;
            case 8:
                minutes = "08";
                break;
            case 9:
                minutes = "09"
                break;
            default:
                minutes = "00";
        }
    }
    var time = hours + ":" + minutes + " " + m; 
    document.getElementById("time").innerHTML = time;
}

function serverTime() {
    var time = "<?php echo &_time ?>";
    document.getElementById("displayServer").innerHTML = time;
}
