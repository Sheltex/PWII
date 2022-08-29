<?php 

$operador = 4;
$num1 = 10;
$num2 = 20;
$result = 0.0;
$operacao = "";

switch ($operador) {
	case 1: $result = somaValor($num1,$num2);
		$operacao = "soma";
		break;

	case 2: $result = subValor($num1,$num2);
		$operacao = "subtração";
		break;

	case 3: $result = multValor($num1,$num2);
		$operacao = "multiplicação";
		break;

	case 4: $result = divValor($num1,$num2);
		$operacao = "divisão";
		break;
	
	default: echo "Saindo";
		break;
}

function somaValor ($num1,$num2){
	return ($num1+$num2);
}

function subValor ($num1,$num2){
	return ($num1-$num2);
}

function multValor ($num1,$num2){
	return ($num1*$num2);
}

function divValor ($num1,$num2){
	return ($num1/$num2);
}

echo "O resultado da ".$operacao." é ".$result;

 ?>