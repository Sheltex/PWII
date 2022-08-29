<?php 

	//executando uma função
	$valor1= 10;
	$valor2= 60;

	function somaValor($valor1,$valor2){
		return($valor1+$valor2);
	}

	$result = somaValor($valor1,$valor2);

	
	echo "A soma é " .$result;


	echo "<br/>A soma é ".somaValor($valor1,$valor2);

 ?>