<?php

/**
 * 
 */
class Visibilidade
{
	public $varPublico;
	protected $varProtegido;
	private $varPrivada;
	
	function __construct($val1, $val2, $val3)
	{
		$this->varPublico = $val1;
		$this->varProtegido = $val2;
		$this->varPrivada = $val3;
	}
}

$VisibilidadeTeste = new Visibilidade(1,2,3);
echo "Atributo Public : $VisibilidadeTeste->varPublico";
echo "Atributo Protected : $VisibilidadeTeste->varProtegido";
echo "Atributo Privado : $VisibilidadeTeste->varPrivada";
?>