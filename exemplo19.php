<?php

/**
 * 
 */
class Conta
{
	private $numero;
	private $saldo;
	
	function __construct($numero, $saldo)
	{
		$this->numero = $numero;
		$this->saldo = $saldo;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setSaldo($novoSaldo)
	{
		$this->saldo = $novoSaldo;
	}
}


$conta = new Conta(1,100);

//$conta->saldo = 300; //essa variavel nao esta visivel por isso da erro.

$conta->setSaldo(300);
$saldoAtual = $conta->getSaldo();
echo "Saldo: $saldoAtual";

//primeiro acessamos a função setSaldo e com ela setamos o novo saldo, em seguida, armazenamos o retorno do novo saldo pela função getSaldo, assim exibimos o saldo atual.

?>