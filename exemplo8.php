<?php

/**
 * 
 */
class Calculadora
{

	function somar($operador1, $operador2)
	{
		return $operador1 + $operador2;
	}

}

	$calc = new Calculadora();
	$soma = $calc->somar(2, 2);
	echo "SOMA: $soma";


?>