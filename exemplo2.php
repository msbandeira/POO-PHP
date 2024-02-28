<?php

	function calcularDescontos($salario, $previdencia){
		return round($salario * 0.275 + $previdencia);
	}

	$joaoNome = "João Filho";
	$joaoDesconto = calcularDescontos(1000,100);

	$mariaNome = "Maria Filho";
	$mariaDesconto = calcularDescontos(2000,200);

	$joseNome = "Jose Filho";
	$joseDesconto = calcularDescontos(3000,300);

	echo "O valor do desconto de $joaoNome e $joaoDesconto.<br>";
	echo "O valor do desconto de $mariaNome e $mariaDesconto.<br>";
	echo "O valor do desconto de $joseNome e $joseDesconto.<br>";
?>
