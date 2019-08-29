<?php

 $arg1 = (int)$_POST['operand1'];
 $arg2 = (int)$_POST['operand2'];
 $operation = (string)$_POST['oper'][0];

	
function add ($arg1, $arg2) {
      return $arg1 + $arg2;
  }

function subtract ($arg1, $arg2) {
    return $arg1 - $arg2;
  }

function multiply ($arg1, $arg2) {
    return $arg1*$arg2;
  }

function divide ($arg1, $arg2) {
    if ($arg2 == 0) {
      return "Делить на ноль нельзя!";
    }
    return $arg1/$arg2;
  }
 
function mathOperation ($arg1, $arg2, $operation) {
    switch ($operation) {
      case "Сложить":
        return add($arg1, $arg2);
      case "Вычесть":
        return subtract($arg1, $arg2);
      case "Умножить":
        return multiply($arg1, $arg2);
      case "Разделить":
        return divide($arg1, $arg2);
    }
  }
	
	$response['result'] = mathOperation ($arg1, $arg2, $operation);
  echo json_encode($response);