<?php

/**
 * 
 */
class Conta
{
	public $numero;
	public $saldo;
	
	function __construct($numero, $saldo)
	{
		$this->numero = $numero;
		$this->saldo = $saldo;
	}

	function creditar($valor)
	{
		$this->saldo = $this->saldo + $valor;
	}

	function debitar($valor)
	{
		$this->saldo = $this->saldo - $valor;
	}

	function transferir($outraConta,$valor)
	{
		if ($this->saldo > $valor) {
			
			$this->debitar($valor);
			$outraConta->creditar($valor);
		}
	}

}

	$conta1 = new conta(1,100);
	$conta2 = new conta(2,100);

	echo "Verifcação de saldo inicial <br>";

	echo "Saldo da conta $conta1->numero: $conta1->saldo <br>";
	echo "Saldo da conta $conta2->numero: $conta2->saldo <br>";
	echo "<hr>";

	$conta1->creditar(50);
	$conta2->creditar(60);

	echo "Novo saldo<br>";

	echo "Saldo da conta $conta1->numero é $conta1->saldo<br>";
	echo "Saldo da conta $conta2->numero é $conta2->saldo<br>";
	echo "<hr>";

	$conta1->transferir($conta2, 50);

	echo "Transferencia realizada com sucesso<br>";

	echo "Saldo em conta: $conta1->saldo<br>";

	echo "saldo na conta $conta2->numero : $conta2->saldo<br>"





?>