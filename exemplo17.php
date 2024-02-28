<?php

/**
 * 
 */
class Visibilidade
{
	
	public function functionPublica()
	{
		echo "Metodo Publico<br>";
	}

	protected function functionProtegido()
	{
		echo "Metodo Protegido<br>";
	}

	private function functionPrivada()
	{
		echo "Metodo Privada<br>";
	}
}

$visibilidadeTeste = new Visibilidade();
$visibilidadeTeste->functionPublica();
$visibilidadeTeste->functionProtegido();
$visibilidadeTeste->functionPrivada();
?>