<?php 
	$nome = "Armandino"; //variavel local mo script

	// implementação de uma função

	function exibir(){
		$nome = "Josefina"; //variavel local na função
		
		echo "Valor da variavel dentro da função " .$nome;
	} 

	exibir(); //chamada da função

	echo "<br/> Valor da variavel fora da função " .$nome; 
?>