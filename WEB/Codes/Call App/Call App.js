// Created by Rushikesh

var cc = prompt("Enter your country calling code \n\n example: india's country calling code is +91");

function one() {
    document.getElementById('number').value+="1";
}
function two() {
    document.getElementById('number').value+="2";
}
function three() {
    document.getElementById('number').value+="3";
}
function four() {
    document.getElementById('number').value+="4";
}
function five() {
    document.getElementById('number').value+="5";
}
function six() {
    document.getElementById('number').value+="6";
}
function seven() {
    document.getElementById('number').value+="7";
}
function eight() {
    document.getElementById('number').value+="8";
}
function nine() {
    document.getElementById('number').value+="9";
}
function star() {
    document.getElementById('number').value+="*";
}
function zero() {
    document.getElementById('number').value+="0";
}
function hash() {
    document.getElementById('number').value+="#";
}

function call() {
    var number = document.getElementById("number").value;
    if (number != null){
        document.getElementById("call").href="tel:"+number;
    }
}

function wacall() {
    var number = document.getElementById("number").value;
    if (number != null){
        if (cc == null){
            cc="+91"
        }
        var a = document.getElementById("wacall").href="https://api.whatsapp.com/send?phone="+cc+number;
          
    }
}

function back(){
    var number = document.getElementById("number");
    var len = number.value.length-1;
    var dummy ="";
    for(let i=0; i<len; i++){
        dummy += number.value[i];
        } document.getElementById("number").value=dummy;
}