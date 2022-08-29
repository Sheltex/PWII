<?php 

	$ano = 2020; //variavel local no script

	//implementação de uma função
	function exibir($parametro){//variável como parametro
		$parametro = $parametro + 4;
		return $parametro;
	}

	echo "Estamos em ".$ano. " e daqui a 4 anos estaremos em ".exibir($ano);
 ?>

<br>

 <?php 

 	$ano = 2020; //variavel local no script

	//implementação de uma função
	function exibir1(){
		GLOBAL $ano; //definição da variável global
		$ano++;
		return $ano;
	}
		echo "<br/> Ano: " .$ano;
		echo "<br/> Ano: " .exibir1();
		echo "<br/> Ano: " .exibir1();
		echo "<br/> Ano: " .$ano;

  ?>

<br>

<?php 

	function exibir2(){
		STATIC $ano; //definindo variável estática
		$ano++; //Mesma coisa que ano + 1
		echo "<br/>" .$ano;

	} 

	echo exibir2();
	echo exibir2();
	echo exibir2();
 ?>

<br>

<?php 

	echo "<br/> Olá Seja Bem Vindo".$_SERVER['REMOTE_ADDR']."<br/>";
	echo "Você está utilizando o navegador: ".$_SERVER['HTTP_USER_AGENT'];
?>

<br>

<?php 

	define("PI", 3.14);
	define("DISC","Matemática");

	echo "<br/> Valor de PI: ".PI;
	echo "<br/> Disciplina: ".DISC;
 ?>

 <br>

 