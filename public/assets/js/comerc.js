    /**
 * Created by alex on 17/06/17.
 */
function startTime() {
    var time = new Date();
    var hour = time.getHours();
    var minute = time.getMinutes();
    var second = time.getSeconds();

    hour = addZero(hour);
    minute = addZero(minute);
    second = addZero(second);
    var div = document.getElementById("clock");
    var complement = "HORARIO LOCAL: ";
    div.innerText = complement + hour+ ":" + minute + ":" + second;
    setTimeout('startTime()',500);
}

function addZero(value) {
    if (value < 10) {
        value = "0" + value;
    }

    return value;
}