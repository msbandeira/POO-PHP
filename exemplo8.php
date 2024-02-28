<?php

/**
 * Classe Calculadora
 */
class Calculadora
{

	function somar($operador1, $operador2)
	{
		return $operador1 + $operador2;
	}

	function multiplicar($operador1, $operador2)
	{
		return $operador1 * $operador2;
	}

	function subtrair($valor1, $valor2)
	{
		return $valor1 - $valor2;
	}

}

	$calc = new Calculadora();
	$soma = $calc->somar(2, 2);
	echo "SOMA: $soma <br>";
	$multi = $calc->multiplicar(5,10);
	echo "<hr>";
	echo "Multiplicação entre 5 e 10: $multi <br>";
	echo "<hr>";
	$subt = $calc->subtrair(10, 2);
	echo "Subtração entre 10 e 2: $subt";


?>