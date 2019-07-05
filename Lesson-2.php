<?php

//-----------------------------------------------------------------------------------------------------------
echo "<h2>Задание 1</h2>" . "<br>";
//-----------------------------------------------------------------------------------------------------------
$a = -15;
$b = -22;

function compare($a = 0, $b = 0) {

	if ($a >= 0 AND $b >= 0) {
		echo $a - $b . " " . "разность a - b" . "<br>";
	} elseif ($a < 0 AND $b < 0) {
		echo $a * $b . " " . "произведение a * b" . "<br>";
	} else {
		echo $a + $b . " " . "сумма a + b" . "<br>";
	} 
}

echo "А: $a B: $b" . "<br>";
echo "<hr>";

echo compare(10, 5) . "<br>";
echo compare(-10, -5) . "<br>";
echo compare(10, -5) . "<br>";
echo compare(0, 0) . "<br>";
echo compare() . "<br>";
echo compare($a, $b) . "<br>";

//-----------------------------------------------------------------------------------------------------------
echo "<h2>Задание 2</h2>" . "<br>";
//-----------------------------------------------------------------------------------------------------------

for ($i=0; $i <=15 ; $i++) { 
	switch ($i) {
		case 0:
		echo "0, ";
		break;		
		case 1:
		echo "1, ";
		break;
		case 2:
		echo "2, ";
		break;
		case 3:
		echo "3, ";
		break;
		case 4:
		echo "4, ";
		break;
		case 5:
		echo "5, ";
		break;
		case 6:
		echo "6, ";
		break;
		case 7:
		echo "7, ";
		break;
		case 8:
		echo "8, ";
		break;
		case 9:
		echo "9, ";
		break;
		case 10:
		echo "10, ";
		break;
		case 11:
		echo "11, ";
		break;
		case 12:
		echo "12, ";
		break;
		case 13:
		echo "13, ";
		break;
		case 14:
		echo "14, ";
		break;
		case 15:
		echo "15";
		break;
		
	}
	
}

//-----------------------------------------------------------------------------------------------------------
echo "<h2>Задание 3</h2>" . "<br>";
//-----------------------------------------------------------------------------------------------------------
$a = 2;
$b = 10;

function summ($a, $b){
	return $a + $b;
}

function residual($a, $b){
	return $a - $b;
}

function multiply($a, $b){
	return $a * $b;
}

function share($a, $b){

	if ($b == 0) {
		echo "На 0 делить нельзя";
		return(" ");
	}

	return $a / $b;
	
}

echo "А: $a B: $b" . "<br>";
echo "<hr>";

echo summ ($a, $b) . " " . "Cумма А:$a + B:$b" . "<br>";
echo residual ($a, $b) . " " . "Разница А:$a - B:$b" . "<br>";
echo multiply ($a, $b) . " " . "Умножение А:$a * B:$b" . "<br>";
echo share ($a, $b) . " " . "Деление А:$a / B:$b" . "<br>";

//-----------------------------------------------------------------------------------------------------------
echo "<h2>Задание 4</h2>" . "<br>";
//-----------------------------------------------------------------------------------------------------------

$arg1 = 225554;
$arg2 = 8;

function mathOperation($arg1, $arg2, $operation){
	switch ($operation) {
		case 'summ':
		echo summ ($arg1, $arg2) . " Сумма А и B" . "<br>";
		break;
		case 'residual':
		echo residual ($arg1, $arg2)  . " Разность А и B" . "<br>";
		break;
		case 'multiply':
		echo multiply ($arg1, $arg2)  . " Умножение А и B" . "<br>";
		break;
		case 'share':
		echo share ($arg1, $arg2)  . " Деление А и B" . "<br>";
		break;
	}
}

echo "А: $arg1 B: $arg2" . "<br>";
echo "<hr>";

echo mathOperation($arg1, $arg2, "Summ");
echo mathOperation($arg1, $arg2, "Residual");
echo mathOperation($arg1, $arg2, "Multiply");
echo mathOperation($arg1, $arg2, "Share");

//-----------------------------------------------------------------------------------------------------------
echo "<h2>Задание 5</h2>" . "<br>";
//-----------------------------------------------------------------------------------------------------------
$data = date ( 'Y' ) ;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Страница HTML</p>
	<p>Страница HTML</p>
	<p>Страница HTML</p>
	<p>Страница HTML</p>
	<p>Страница HTML</p>
	<p>Страница HTML</p>
</body>
<footer>Подвал сайта <?php echo "$data";?></footer>
</html>

<?php
//-----------------------------------------------------------------------------------------------------------
echo "<h2>Задание 6</h2>" . "<br>";
//-----------------------------------------------------------------------------------------------------------

$val = 12;
$pow = 2;

function power($val, $pow){
	if ($pow > 0)
	{
		return $val * power ($val, $pow - 1);
	}elseif ($pow < 0) {
		echo "Отрицательная степень";
		return;
	}
	return(1);
}

echo power($val, $pow) . " - $val в степени $pow " . "<br>";

//-----------------------------------------------------------------------------------------------------------
echo "<h2>Задание 7</h2>" . "<br>";
//-----------------------------------------------------------------------------------------------------------

$data_hour = date ( 'G' ) ;
$data_minutes = date ( 'i' ) ;

switch ($data_hour) {
	case '00':
	case '05':
	case '06':
	case '07':
	case '08':
	case '09':
	case '10':
	case '11':
	case '12':
	case '13':
	case '14':
	case '15':
	case '16':
	case '17':
	case '18':
	case '19':
	case '20':
	echo "$data_hour" . " часов " ; 
	break;
	case '01':
	case '21':
	echo "$data_hour" . " час ";
	break;
	default:
	echo "$data_hour" . " часа ";
	break;
}

switch ($data_minutes) {
	case '05':
	case '06':
	case '07':
	case '08':
	case '09':
	case '10':
	case '11':
	case '12':
	case '13':
	case '14':
	case '15':
	case '16':
	case '17':
	case '18':
	case '19':
	case '20':
	case '25':
	case '26':
	case '27':
	case '28':
	case '29':
	case '30':
	case '35':
	case '36':
	case '37':
	case '38':
	case '39':
	case '40':
	case '45':
	case '46':
	case '47':
	case '48':
	case '49':
	case '50':
	case '55':
	case '56':
	case '57':
	case '58':
	case '59':
	echo "$data_minutes" . " минут" .  "<br>";
	break;
	case '01':
	case '21':
	case '31':
	case '41':
	case '51':
	echo "$data_minutes" . " минута" .  "<br>";
	break;
	case '02':
	case '03':
	case '04':
	case '22':
	case '23':
	case '24':
	case '32':
	case '33':
	case '34':
	case '42':
	case '43':
	case '44':
	case '52':
	case '53':
	case '54':
	echo "$data_minutes" . " минуты" .  "<br>";
	break;
}

?>