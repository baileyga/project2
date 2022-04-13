var numOne = document.getElementById('num-one');
var numTwo = document.getElementById('num-two');
var addSum = document.getElementById('add-sum');

var addition = [];
var subtract = [];
var mult = [];
var division = [];

numOne.addEventListener('input', add);
numTwo.addEventListener('input', add);

function add() {
var one = parseFloat(numOne.value) || 0;
var two = parseFloat(numTwo.value) || 0;
addition[0] = one;
addition[1] = two;
    for (var i = 0; i < addition.length - 1; i++) {
        console.log(addition[i]);
        addSum.innerText = addition[i]+addition[i+1];
    }
}

var numOne1 = document.getElementById('num-one1');
var numTwo2 = document.getElementById('num-two2');
var subSum = document.getElementById('sub-Total');

numOne1.addEventListener('input', sub);
numTwo2.addEventListener('input', sub);

function sub() {
var one = parseFloat(numOne1.value) || 0;
var two = parseFloat(numTwo2.value) || 0;
subtract[0] = one;
subtract[1] = two;
    for (var i = 0; i < subtract.length - 1; i++) {
        console.log(subtract[i]);
        subSum.innerText = subtract[i]-subtract[i+1];
    }
}

var num1 = document.getElementById('num-1');
var num2 = document.getElementById('num-2');
var prod = document.getElementById('product');

num1.addEventListener('input', multiply);
num2.addEventListener('input', multiply);

function multiply() {
var one = parseFloat(num1.value) || 0;
var two = parseFloat(num2.value) || 0;
mult[0] = one;
mult[1] = two;
    for (var i = 0; i < mult.length - 1; i++) {
        console.log(mult[i]);
        prod.innerText = mult[i]*mult[i+1];
    }
}

var num1one = document.getElementById('numone');
var num2two = document.getElementById('numtwo');
var total = document.getElementById('divTotal');

num1one.addEventListener('input', divide);
num2two.addEventListener('input', divide);

function divide() {
var one = parseFloat(num1one.value) || 0;
var two = parseFloat(num2two.value) || 0;
division[0] = one;
division[1] = two;
    for (var i = 0; i < division.length - 1; i++) {
        console.log(division[i]);
        total.innerText = division[i]/division[i+1];
    }
}