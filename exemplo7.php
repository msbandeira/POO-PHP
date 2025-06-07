<?php

/**
 * 
 */
class ContaCliente
{
	public $numero;
	public $saldo;
	
	function creditar($valor)
	{
		$this->saldo = $this->saldo + $valor;
	}
}

?>