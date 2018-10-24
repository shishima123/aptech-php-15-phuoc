function light() {
    var a = document.getElementById('demo');
    console.log(a.src);
    console.log(document.getElementById('btn').innerHTML);
    if (a.src.includes("off.gif")) {
        document.getElementById('demo').src = "on.gif";
        document.getElementById('btn').innerHTML = "Tắt đèn";
        // console.log(document.getElementById('demo').innerHTML);
        // console.log('mo den');
    } else {
        document.getElementById('demo').src = "off.gif";
        document.getElementById('btn').innerHTML = "Mở đèn";
        // console.log(document.getElementById('demo').innerHTML);
        // console.log('tat den');
    }
}