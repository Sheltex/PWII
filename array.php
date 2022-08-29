<?php 

	$array = array(1,2,3);

	$array = [1,2,3];

	$array = array(

		"chave1" => 1,
		"chave2" => "PHP",
		"chave3" => false
	);


	echo $array["chave1"];
	echo $array["chave2"];
	echo $array["chave3"];

	$array["chave2"] = 2;

	echo $array["chave2"];

	$array = array(1, "php", false);

	echo $array[1];

	foreach ($array as $chave => $valor) {
		
		echo "<br>{$chave}: {$valor} <br>";
	}

	$linguagens = array (

		array("PHP","PHP: Hypertext Preprocessor"),
		array("SQL", "Structured Query Language")

	);

	echo $linguagens[1][1];




 ?>