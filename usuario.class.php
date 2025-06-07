<?php

/**
 * 
 */
class Usuario
{
	public $nome;
	public $n1;
	public $n2;
	

	function imprimeUsuario(){
		echo $this->nome;
		$saldo = $this->n1+$this->n2;
		echo $saldo;
	}

	function subtrair(){
		$novoSaldo = $saldo - $this->n1;
		echo $novoSaldo;
	}
	
}


?>