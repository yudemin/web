<!doctype html>
<html lang="en">
  <head>
    <title>lab5</title>
    <link href="css/style.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<button onclick="
alert('ТУТ НИЧЕГО((');
">УРОК 1</button>

<button onclick="
alert('НАМБЕР ТУ');
// #1
var num = 3;
alert(num);
// #2
var a = 10;
var b = 2;
alert(a + b);
alert(a - b);
alert(a * b);
alert(a / b);
// #3
var c = 15;
var d = 2;
var result = c + d;
alert(result);
// #4
var a = 10;
var d = 2;
var c = 5;
alert(a + b + c);
// #5
var a = 17;
var b = 10;
var c = a - b;
var d = 7;
var result = c + d;
alert(result);
// #6
var str = 'Привет, Мир!';
alert(str);
// #7
var str1 = 'Привет, ';
var str2 = 'Мир!';
alert(str1 + str2);
// #8
var name = 'Вася';
alert('Привет, ' + name);
// #9
var age = 25;
alert('Мне ' + age + ' лет!');
// #10
var name = prompt('Введите ваше имя');
alert('Ваше имя ' + name);
// #11
var num = prompt('Введите число');
alert(num * num);
// #12
var str = 'abcde';
alert(str[0]);
alert(str[3]); 
alert(str[4]);
// #13
var num = '12345';
alert(num[0] * num[1] * num[2] * num[3] * num[4]);
// #14 
alert(60 * 60); 
alert(60 * 60 * 24); 
alert(60 * 60 * 30); 
// #15
var hour = '16';
var min = '05';
var sec = '59';
alert(hour + ':' + min + ':' + sec);
// #16 
var num = 3;
alert(num * num);
// #17
var num = 47;
num += 7;
num -= 18;
num *= 10;
num /= 15;
alert(num);
// #18
var num = 10;
num++;
num++;
num--;
alert(num);
">УРОК 2</button> 



<button onclick="
alert('НАМБЕР ТРИ');
// #1
var arr = ['a', 'b', 'c'];
alert(arr);
// #2
var arr = ['a', 'b', 'c'];
alert(arr[0]);
alert(arr[1]);
alert(arr[2]);
// #3
var arr = ['a', 'b', 'c', 'd'];
alert(arr[0] + '+' + arr[1] + ',' + arr[2] + '+' + arr[3]);
// #4
var arr = [2, 5, 3, 9];
var result = arr[0] * arr[1] + arr[2] * arr[3];
alert(result);
// #5
var obj = {a: 1, b: 2, c: 3};
alert(obj['c']);
alert(obj.c);
// #6
var obj = {Коля: '1000', Вася: '500', Петя: '200'};
alert(obj['Коля']);
alert(obj['Петя']);
// #7
var obj = {1:'пн', 2:'вт', 3:'ср', 4:'чт', 5:'пт', 6:'сб', 7:'вс'};
alert(obj[4]);
// #8
var obj = {1:'пн', 2:'вт', 3:'ср', 4:'чт', 5:'пт', 6:'сб', 7:'вс'};
var day = 3;
alert(obj[day]);
// #9
var arr = [ [1, 2, 3], [4, 5, 6], [7,8,9] ];
alert(arr[1][0]);
// #10
var obj = {js:['jQuery', 'Angular'], php: 'hello', css: 'world'};
alert(obj['js'][0]);
// #11
var arr = {
	'ru':['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
	'en':['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
};
alert(arr['ru'][0]);
alert(arr['en'][2]);
// #12
var arr = {
	'ru':['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
	'en':['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
};
var lang = 'ru';
var day = 3;
alert(arr[lang][day]);
">УРОК 3</button>

<button onclick="
alert('НАМБЕР ФОР');
///////
var a = 0;
if (a == 0) {
	alert('Верно');
} else {
	alert('Неверно');
}
///////
var a = 1;
if (a > 0) {
	alert('Верно');
} else {
	alert('Неверно');
}
///////
var a = -1;
if (a < 0) {
	alert('Верно');
} else {
	alert('Неверно');
}
///////
var a = 0;
if (a >= 0) {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var a = 0;
if (a <= 0) {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var a = 1;
if (a != 0) {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var a = 'test';
if (a == 'test') {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var a = '1';
if (a === '1') {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var test  = true;
if (test) {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var test  = false;
if (!test) {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var a = 5;
if (a > 0 && a < 5) {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var a = 5;
if (a == 0 || a == 2) {
	a += 7;
} else {
	a /= 10;
}
alert(a);
//////
var a = 1;
var b = 3;
if (a <= 1 && b >= 3) {
	alert(a + b);
} else {
	alert(a - b);
}
//////
var a = 3;
var b = 7;
if ((a > 2 && a < 11) || (b >= 6 && b < 14)) {
	alert('Верно');
} else {
	alert('Неверно');
}
//////
var num = 2;
switch (num) {
	case 1:
		result = 'зима';
	break;
	case 2:
		result = 'весна';
	break;
	case 3:
		result = 'лето';
	break;
	case 4:
		result = 'осень';
	break;
}
alert(result);
//////
var day = 12;
if (day <= 10 ) {
	var decade = 1;
}
if (day >= 11 && day <=20) {
	decade = 2;
}
if (day >= 21 && day <=30) {
	decade = 3;
}
alert(decade);
//////
var month = 6;
if (month == 12 || month <= 2) {
	var result = 'Зима';
}
if (month >= 3 && month <= 5) {
	result = 'Весна';
}
if (month >= 6 && month <= 8) {
	result = 'Лето';
}
if (month >= 9 && month <= 11) {
	result = 'Осень';
}
alert(result);
//////
var str = 'abcde';
if (str[0] == 'а') {
	alert('Да');
} else {
	alert('Нет');
}
//////
var str = '12345';
if (str[0] == '1' || str[0] == '2' || str[0] == '3') {
	alert('Да');
} else {
	alert('Нет');
}
//////
var str = '123';
var sum = Number(str[0]) + Number(str[1]) + Number(str[2]);
alert(sum);
//////
var str = '123456';
var str1 = Number(str[0]) + Number(str[1]) + Number(str[2]);
var str2 = Number(str[3]) + Number(str[4]) + Number(str[5]);
if (str1 == str2) {
	alert('Да');
} else {
	alert('Нет');
}
">УРОК 4</button>


<button onclick="
alert('НАМБЕР ФАЙВ');
//////
var i = 1;
while (i <= 100) {
	document.write(i+'<br>');
	i += 1;
}
//////
var i = 11;
while (i <= 33) {
	document.write(i+'<br>');
	i += 1;
}
///////
var i = 0;
while (i <= 100) {
	document.write(i+'<br>');
	i += 2;
}
//////
var i = 1;
var sum = 0;
while (i <= 100) {
	sum += i;
	i++;
}
alert(sum);
//////
var arr = [1, 2, 3, 4, 5];
for (var i = 0; i < arr.length; i++) {
	alert(arr[i]);
}
/////
var arr = [1, 2, 3, 4, 5];
var result = 0;
for (var i = 0; i < arr.length; i++) {
	result += arr[i];
}
alert(result);
//////
var obj = {green: 'зеленый', red: 'красный', blue: 'голубой'};
for (var key in obj) {
	alert(key); 
	alert(obj[key]); 
}
//////
var obj = {Коля: '200', Вася: '300', Петя: '400'};
for (var key in obj) {
	document.write(key + ' - зарплата ' + obj[key] + ' долларов.<br>');
}
//////
var arr = [2, 5, 9, 15, 0, 4];
for (var i = 0; i < arr.length; i++) {
	if (arr[i] > 3 && arr[i] < 10) {
		alert(arr[i]);
	}
}
//////
var sum = 0;
var arr = [2, -1, -3, 15, 0, 4];
for (var i = 0; i < arr.length; i++) {
	if (arr[i] >= 0) {
		sum += arr[i];
	}
}
alert(sum);
///////
var arr = [1, 2, 5, 9, 4, 13, 4, 10];
for (var i = 0; i < arr.length; i++) {
	if (arr[i] == 4) {
		alert('Есть!');
		break;
	}
}
///////
var arr = ['10', '20', '30', '50', '235', '3000'];
for (var i = 0; i < arr.length; i++) {
	if (arr[i][0] == '1' || arr[i][0] == '2' || arr[i][0] == '5') {
		alert(arr[i]);
	}
}
///////
var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var str = '';
for (var i = 0; i < arr.length; i++) {
	str += '-' + arr[i];
}
document.write(str + '-');
//////
var arr = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
for (var i = 0; i < arr.length; i++) {
	if (i == 5 || i == 6) {
		document.write('<b>' + arr[i] + '</b><br>');
	} else {
		document.write(arr[i] + '<br>');
	}
}
/////////
var arr = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
day = 3;
for (var i = 0; i < arr.length; i++) {
	if (i == day) {
		document.write('<i>' + arr[i] + '</i><br>');
	} else {
		document.write(arr[i] + '<br>');
	}
}
///////
for (var n = 1000, num = 0; n > 50; n /= 2, num++);
alert(n);
alert(num);
">УРОК 5</button>

<button onclick="
alert('НАМБЕР СЫКС');
///////
var a = 10;
var b = 3;
alert(a % b);
//////
var a = 10;
var b = 3;
var rest = a % b;
if (rest != 0) {
	alert('Делится с остатком ' + rest);
} else {
	alert('Делится, результат деления: ' + (a / b));
}
///////
var st = Math.pow(2, 10);
alert(st);
///////
alert(Math.sqrt(245));
/////////
var arr = [4, 2, 5, 19, 13, 0, 10];
var summ = 0;
for (var i = 0; i < arr.length; i++) {
	summ += Math.pow(arr[i], 3);
}
alert(Math.sqrt(summ));
/////////
alert(Math.sqrt(379).toFixed(0)); 
alert(Math.sqrt(379).toFixed(1)); 
alert(Math.sqrt(379).toFixed(2)); 
///////
var sq = Math.sqrt(587);
var obj = {'floor': Math.floor(sq), 'ceil': Math.ceil(sq)}
//////
alert(Math.max(4, -2, 5, 19, -130, 0, 10)); 
alert(Math.min(4, -2, 5, 19, -130, 0, 10)); 
//////
alert(Math.floor(Math.random() * (100 - 1 + 1)) + 1);
//////
var arr = [];
for (i = 0; i < 10; i++) {
	arr[i] = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
}
alert(arr);
//////
var a = 10;
var b = 3;
alert(Math.abs(b-a));
///////
var a = 3;
var b = 5;
var с = Math.abs(a-b);
alert(с);
//////
var arr = [12, 15, 20, 25, 59, 79];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
	sum += arr[i]
}
var average = sum / arr.length;
alert(average);
////////
var fact = 1;
var num = 4;
for (var i = 1; i <= num; i++) {
	fact = fact * i;
}
alert(fact);
">УРОК 6</button>

<button onclick="
alert('НАМБЕР СЭВЭН')
//////
var str = 'js';
alert(str.toUpperCase());
////
var str = 'JS';
alert(str.toLowerCase());
////
var str = 'я учу javascript!';
alert(str.length);
/////
var str = 'я учу javascript!';
alert(str.substr(1, 4));
//////
var str = 'я учу javascript!';
alert(str.indexOf('учу'));
//////
var str = 'я учу javascript!';
var n = 4;
if (str.length > n) {
	var result = str.substr(0, n) + '...';
} else {
	var result = str;
}
alert(result);
//////
var str = 'Я-учу-javascript!';
alert(str.replace(/-/g, '!'));
//////
var str = 'я учу javascript!';
var arr = str.split(' ');
alert(arr);
//////
var str = 'я учу javascript!';
var arr = str.split('');
alert(arr);
//////
var date  = '2025-12-31';
var arr = date.split('-');
alert(arr[2] + '.' + arr[1] + '.' + arr[0]);
///////
var arr = ['я', 'учу', 'javascript', '!'];
alert(arr.join('+'));
///////
var str = 'я учу javascript!';
var first = str.slice(0, 1).toUpperCase() + str.slice(1);
alert(first);
//////
var str = 'я учу javascript!';
var arr = str.split(' ');
for (var i = 0; i < arr.length; i++) {
	arr[i] = arr[i].slice(0, 1).toUpperCase() + arr[i].slice(1);
}
alert(arr);
///////
var str = 'var_test_text';
var arr = str.split('_');
for (var i = 1; i < arr.length; i++) { 
	arr[i] = arr[i].slice(0, 1).toUpperCase() + arr[i].slice(1);
}
var result = arr.join('');
alert(result);

">УРОК 7</button>

<button onclick="
alert('НАМБЕР ЭЙТ')
//////
var arr1 = [1, 2, 3];
var arr2 = [4, 5, 6];
alert(arr1.concat(arr2));
//////
var arr = [1, 2, 3];
alert(arr.reverse());
///////
var arr = [1, 2, 3];
arr.push(4, 5, 6);
alert(arr);
///////
var arr = [1, 2, 3];
arr.unshift(4, 5, 6);
alert(arr);
//////
var arr = ['js', 'css', 'jq'];
alert(arr.shift());
////////
var arr = ['js', 'css', 'jq'];
alert(arr.pop());
//////
var arr = [1, 2, 3, 4, 5];
var result = arr.slice(0, 3);
alert(result);
////////
var arr = [1, 2, 3, 4, 5];
var result = arr.slice(-2);
alert(result);
///////
var arr = [1, 2, 3, 4, 5];
arr.splice(1, 2);
alert(arr);
//////
var arr = [1, 2, 3, 4, 5];
var result = arr.splice(1, 3);
alert(result);
//////
var arr = [1, 2, 3, 4, 5];
arr.splice(3, 0, 'a', 'b', 'c');
alert(arr);
///////
var arr = [1, 2, 3, 4, 5];
arr.splice(1, 0, 'a', 'b');
arr.splice(6, 0, 'c');
arr.splice(8, 0, 'e');
alert(arr);
/////////
var arr = [3, 4, 1, 2, 7];
arr.sort();
alert(arr);
////////
var arr = {js: 'test', jq: 'hello', css: 'world'};
var result = Object.keys(arr);
alert(result);



">УРОК 8</button>
<button onclick="
alert('НАМБЕР НАЙН')
//////
var str = 'hello';
str = str[0].toUpperCase() + str.substr(1);
alert(str);
//////
var str = '123456';
result = str.split('').reverse().join('');
alert(result);
//////
var str = '3751';
arr = str.split('');
arr.sort();
var result = arr.join('');
alert(result);
///////
var str = 'http://phphtml';
if (str.substr(0, 7) == 'http://') {
	alert('Да');
} else {
	alert('Нет');
}
//////
var str = 'index.html';
if (str.substr(-5) == '.html') {
	alert('Да');
} else {
	alert('Нет');
}
/////////
">УРОК 9</button>


<button onclick="
alert('НАМБЕР ТЭН')
//////
function square(num) {
	return num*num;
}
///////
function sum(a, b) {
	return a + b;
}
//////////
function func(a, b, c) {
	return (a - b) / c;
}
///////
function getDay(num) {
	var arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	return arr[num - 1];
}
/////////
">УРОК 10</button>


<button onclick="
alert('НАМБЕР ЭЛЭВЭН')
//////
var arr = [1, 2, 3, 4, 5];
var flag = false;
for (var i = 0; i < arr.length; i++) {
	if (arr[i] == 5) {
		flag = true;
		break;
	}
}
if (flag == true) {
	alert('Да');
} else {
	alert('Нет');
}
///////////
var num = 31;
var flag = false;
for (var i = 2; i < num; i++) {
	if (num % i == 0) {
		flag = true;
		break;
	}
}
if (flag == true) {
	alert('true');
} else {
	alert('false');
}
///////////
var arr = [1, 2, 3, 3, 4, 5];
var flag = false;
for (var i = 1; i < arr.length; i++) {
	if (arr[i] == arr[i-1]) {
		flag = true;
		break;
	}
}

if (flag == true) {
	alert('Да');
} else {
	alert('Нет');
}
//////////
">УРОК 11</button>


<button onclick="
alert('НАМБЕР ТВЭЛВ')
//////
function func(a, b) {
	return a == b;
}
///////
function func(a, b) {
	return a + b > 10;
}
//////////
function func(num) {
	return num < 0;
}
////
">УРОК 12</button>


<button onclick="
alert('НАМБЕР ФЁРТИН')
//////

////////////////////////////////////////////////////////////////////
//////
var str = '';
for (var i = 1; i < 10; i++) {
	str += i;
}
alert(str);
////////
var str = '';
for (var i = 9; i > 0; i--) {
	str += i;
}
alert(str);
/////////
var str = '-';
for (var i = 1; i < 10; i++) {
	str += i + '-';
}
alert(str);
//////////
var str = '';
for (var i = 1; i <= 20; i++) {
	str += 'x';
	document.write(str + '<br>');
}
///////////
for (var i = 1; i <= 9; i++) {
	for (var j = 1; j <= i; j++) {
		document.write(i);
	}
	document.write('<br>');
}
//////////////
var str = '';
for(var i = 0; i <= 10; i++) {
	str += 'xx';
	document.write(str + '<br>');
}
//////////
">УРОК 13</button>

<button onclick="
alert('НАМБЕР ФОРТИН')
//////
var arr = [];
var str = 'x';
for (var i = 0; i < 10; i++) {
	arr.push(str);
	str += 'x';
}
console.log(arr);
//////////
var arr = [];
for (var i = 1; i < 10; i++) {
	var str = '';
	for (var j = 0; j < i; j++) {
		str += i;
	}
	arr.push(str);
}
console.log(arr);
/////////////
function arrayFill(value, length) { 
	var arr = [];
	for (var i = 0; i < length; i++) {
		arr.push(value);
	}
	return arr;
}
console.log(arrayFill('x', 5));
///////////
function func(arr) {
	var sum = 0;
	for (var i = 0 ; i < arr.length; i++) {
		sum += arr[i];
		if (sum > 10) {
			return i + 1;
		}
	}
}
console.log(func([1, 2, 3, 4, 5, 6, 7, 8, 9]));  
/////////
var arr = [1, 3, 5, 6, 7, 9];
var result = [];
for (var i = arr.length - 1; i >= 0; i--) {
	result.push(arr[i]);
}
console.log(result);
//////////
var arr = [[1, 2, 3], [4, 5], [6]];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
	for (var j = 0; j < arr[i].length; j++) {
		sum += arr[i][j];
	}
}
alert(sum);
//////////
var arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
	for (var j = 0; j < arr[i].length; j++) {
  		for (var k = 0; k < arr[i][j].length; k++) {
			sum += arr[i][j][k];
   		}
	}
}
alert(sum);
/////////////
">УРОК 14</button>

<button onclick="
alert('НАМБЕР ФИФТИН')
//////
function isNumberInRange(num) {
  return num > 0 && num < 10;
}
var arr = [1, 3, 5, 6, 9, 11, 15, 30];
var result = [];
for (var i = 0; i < arr.length; i++) {
  if (isNumberInRange(arr[i])) {
    result.push(arr[i]);
  }
}
conslole.log(result);
function getDigitsSum(num) {
  var num = String(num);
  var sum = 0;
  for (var i = 0; i < num.length; i++) {
    sum += Number(num[i]);
  }
  return sum;
}
alert(getDigitsSum(123));
for (var i = 1; i < 2017; i++) {
  if (getDigitsSum(i) == 13) {
    console.log(i);
  }
}
function isEven(num) {
  return num % 2 == 0;
}
var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var result = [];
for (var i = 0; i < arr.length; i++) {
  if(isEven(arr[i])) {
    result.push(arr[i]);
  }
}
console.log(result);
function getDivisors(num) {
  var arr = [];
  for (var i = 1; i <= num; i++) {
    if (num % i == 0) {
      arr.push(i);
    }
  }
  
  return arr;
}
alert(getDivisors(12));
">УРОК 15</button>

<button onclick="
alert('НАМБЕР СЫКСТИН')
//////
var str ='abcde abcde abcde';
var newArr = [];

var arr = str.split(' ');
for (var i = 0; i < arr.length; i++) {
  newArr.push(ucfirst(arr[i]));
}

var newStr = newArr.join(' ');
alert(newStr);

function ucfirst(str) {
  return str[0].toUpperCase() + str.substr(1);
}
var str ='var_text_hello';
var newArr = [];

var arr = str.split('_');
for (var i = 1; i < arr.length; i++) {
  newArr.push(ucfirst(arr[i]));
}

var newStr = newArr.join(' ');
alert(newStr);

function ucfirst(str) {
  return str[0].toUpperCase() + str.substr(1);
}
function inArray(str, arr) {
  for (var i = 0; i < arr.length; i++) {
    if (arr[i] === str) {
      return true;
    }
  }
  return false;
}

var str = 'яблоко';
var arr = ['банан', 'яблоко', 'персик'];
console.log(inArray(str, arr));
var str = '123456';

function toRearrange(text)
{
var arr = str.split('');
var arrNew = [];
for(var i=0; i<arr.length; i+=2)
{
var temp = arr.slice(i, i+2).reverse();
arrNew = arrNew.concat(temp);
}
str = arrNew.join('');
return str;
}
document.write(toRearrange(str));
////////////
">УРОК 16</button>

<button onclick="
alert('НАМБЕР СЕВЕНТИН')
//////
function func(arr) {
  alert(arr[0]);
  arr.splice(0, 1);
  if (arr.length > 0) {
    func(arr);
  }
}
var bigNum = 3452349567;
var result = 0;

simplify = function(num){
result = 0;
var numArr = num.toString().split('');
for (var i = 0; i < numArr.length; i++){
console.log('i = ' + i);
result += parseInt(numArr[i]); 
console.log(result);
}

if (result > 9){
simplify(result);
}
}
">УРОК 17</button>


<button onclick="
alert('НАМБЕР ЭЙТИН')
//////
for (var i = 1; i <= 100; i++) {
  document.write(i + '<br>');
}
for (var i = 100; i > 0; i--) {
  document.write(i + '<br>');
}
for (var i = 2; i < 100; i += 2) {
  document.write(i + '<br>');
}
for (var i = 2; i < 100; i += 2) {
  document.write(i + '<br>');
}
for (var i = 2; i < 100; i += 2) {
  document.write(i + '<br>');
}
var arr = [];
for (var i = 0; i < 10; i++) {
  arr[i] = 'x';
}
console.log(arr);
var arr = [];
for (var i = 1; i <= 10; i++) {
  arr.push(i);
}
console.log(arr);
var arr = [];
for (var i = 0; i < 10; i++) {
  arr.push(Math.random().toFixed(2));
}
console.log(arr);
var arr = [];
for (var i = 0; i < 10; i++) {
  arr.push(Math.round(Math.random() * 10) + 1);
}
console.log(arr);
var arr = [1, 2, 4, -1, -3, 8, 7, 0, -5, 18, 12];
for (var i = 0; i < arr.length; i++) {
  if(arr[i] > 0 && arr[i] < 10) {
    console.log(arr[i]);
  }
}
var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
for (var i = 0; i < arr.length; i++) {
  if(arr[i] == 5) {
    alert('Есть!');
    break;
  }}
var arr = [1, 2, 3, 4, 5];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
  sum += arr[i];
}
alert(sum);
var arr = [1, 2, 3, 4, 5];
var sum = 0;
for (var i = 0; i < arr.length; i++) {
  sum += arr[i] * arr[i];
}
alert(sum);
">УРОК 18</button>

<button onclick="
alert('НАМБЕР НАЙНТИН')
//////
document.location.href = "less19.php";
">УРОК 19</button>



<button onclick="
alert('НАМБЕР №№№№№№№№№№№№№№№№№№№№№№№№№№№')
//////


">УРОК №№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№№</button>






<button onclick="buttonClick()"></button>

	<div>
 	<span class="one"></span>
 	<span class="two"></span>
 	<span class="three"></span>
 	<span class="four"></span>
 	</div>
</body>
</html>