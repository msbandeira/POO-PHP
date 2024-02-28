<?php

	function calcularDescontos($salario, $previdencia){
		return round($salario * 0.275 + $previdencia);
	}

	$funcionarios = array(3);
	$funcionarios[0] = array("joão Filho", 1000, 100);
	$funcionarios[1] = array("Maria Filho", 2000, 200);
	$funcionarios[2] = array("Jose Filho", 3000, 300);

	for ($i=0; $i <3 ; $i++) { 
		$nome = $funcionarios[$i][0];
		$descontos = calcularDescontos($funcionarios[$i][1],$funcionarios[$i][2]);

		echo "O valor do desconto de $nome e $descontos. <br>";
	}

?>