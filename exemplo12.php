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

	function transferir($outraConta, $valor)
	{
		if ($this->saldo > $valor) {
			
			$this->debitar($valor);
			$outraConta->creditar($valor);
		}
	}
}

/**
 * 
 */
class Poupanca extends Conta
{
	public $juros = 0.05;
	
	function atualizarJuros()
	{
		$this->saldo = $this->saldo * (1 + $this->juros);
	}
}

$conta = new Conta(1,150);
$poupanca = new Poupanca(2,150);

$conta->creditar(50);
$poupanca->creditar(100);

//os metodos debitar e creditar são utlizados sem problemas
//mesmo que nao seja escritos explicitamente

echo "Saldo da conta $conta->numero: $conta->saldo<br>";
echo "Saldo da poupanca $poupanca->numero: $poupanca->saldo<br>";

echo "<hr>";

$poupanca->creditar(100);
echo "saldo poupanca $poupanca->numero: $poupanca->saldo<br>";

?>