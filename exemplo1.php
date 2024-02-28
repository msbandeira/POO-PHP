<?php

	$joaoSalario = 1000;
	$joaoPrevidencia = 100;
	$joaoNome = "João da Silva";
	$joaoDesconto = ($joaoSalario * 0.275 + $joaoPrevidencia);

	$mariaSalario = 2000;
	$mariaPrevidencia = 200;
	$mariaNome = "João da Silva";
	$mariaDesconto = round($mariaSalario * 0.275 + $mariaPrevidencia, 2);

	$joseSalario = 3000;
	$josePrevidencia = 300;
	$joseNome = "João da Silva";
	$joseDesconto = round($joseSalario * 0.275 + $josePrevidencia, 2);

	echo "O valor do desconto de $joaoNome e $joaoDesconto.<br>";
	echo "O valor do desconto de $mariaNome e $mariaDesconto.<br>";
	echo "O valor do desconto de $joseNome e $joseDesconto.<br>";

?>
