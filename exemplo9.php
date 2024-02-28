<?php

/**
 * 
 */
class Conta
{
	
	function __construct($nome, $saldo)
	{
		$this->nome = $nome;
		$this->saldo = $saldo;
	}

	function incrementarSaldo($valor)
	{
		$this->saldo = $this->saldo + $valor;
	}

}

	$cliente = new Conta("Antonio",1000);
	$cliente->incrementarSaldo(150);

	echo "Cliente: $cliente->nome <br>";
	echo "Saldo: $cliente->saldo";


?>