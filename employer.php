<?php 

	$funcionarios = array(
		array("nome"=>"Alex","idade"=>21,"salario"=>1285.27,"ativo"=>false),
		array("nome"=>"Emerson","idade"=>35,"salario"=>3885.27,"ativo"=>true),
		array("nome"=>"Osvaldo","idade"=>54,"salario"=>5285.27,"ativo"=>false),

	);

	$bonificacao = 10;

	foreach($funcionarios as $funcionario){
		if($funcionario["ativo"]){
			$funcionario["salario"] += $funcionario["salario"] * ($bonificacao/100);

			echo "Funcionário: {$funcionario['nome']} - {$funcionario['salario']} <br>";
		}
		else{
			echo "Funcionário: {$funcionario['nome']} - INATIVO <br>";
		}
		
	}
	var_dump($funcionario);

	echo "<br>";
	
	var_dump($funcionarios);


 ?>