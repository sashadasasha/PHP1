<?php

#Задание 1

$a = rand(-100, 100);
$b = rand(-100, 100);

echo "a = {$a}<br>";
echo "b = {$b}<br>";

if ($a >= 0 && $b >= 0) {
  echo $a - $b;
} elseif ($a < 0 && $b < 0) {
  echo $a*$b;
} else {
  echo $a + $b;
}

echo "<br>";

#Задание 2

$a = rand(0, 15);

echo " a = {$a}<br>";

switch ($a) {
  case 0:
  echo "0 <br>";
  case 1:
  echo "1 <br>";
  case 2:
  echo "2 <br>";
  case 3:
  echo "3 <br>";
  case 4:
  echo "4 <br>";
  case 5:
  echo "5 <br>";
  case 6:
  echo "6 <br>";
  case 7:
  echo "7 <br>";
  case 8:
  echo "8 <br>";
  case 9:
  echo "9 <br>";
  case 10:
  echo "10 <br>";
  case 11:
  echo "11 <br>";
  case 12:
  echo "12 <br>";
  case 13:
  echo "13 <br>";
  case 14:
  echo "14 <br>";
  case 15:
  echo "15 <br>";

}

#Задание 3

function add ($arg1, $arg2) {
    return $arg1 + $arg2."<br>";
}

echo add($a,$b);

function subtract ($arg1, $arg2) {
  return $arg1 - $arg2."<br>";
}

echo subtract($a,$b);

function multiply ($arg1, $arg2) {
  return $arg1*$arg2."<br>";
}

echo multiply($a,$b);

function divide ($arg1, $arg2) {
  return round($arg1/$arg2, 2)."<br>";
}

echo divide($a,$b);

#Задание 4

function mathOperation ($arg1, $arg2, $operation) {
  switch ($operation) {
    case "+":
      return add($arg1, $arg2);
    case "-":
      return subtract($arg1, $arg2);
    case "*":
      return multiply($arg1, $arg2);
    case "/":
      return divide($arg1, $arg2);
  }
}


echo mathOperation($a,$b,"+");
echo mathOperation($a,$b,"-");
echo mathOperation($a,$b,"*");
echo mathOperation($a,$b,"/");

#Задание 6

function power ($val, $pow) {
  if ($pow === 1) {
    return $val;
  } else {
    return $val*power($val, $pow - 1);
  }
}

echo power (2,3);

echo "<br>";
