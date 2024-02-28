<?php

/**
 * 
 */
class AreaCalc
{
	public static $pi = 3.141517;
	
	static function areaCircunferencia($raio)
	{
		return $raio * $raio * (AreaCalc::$pi); //Aqui pode ser usado self::$pi
	}
}


$raioAtual = 10;
$area = AreaCalc::areaCircunferencia($raioAtual);
$valorPi = AreaCalc::$pi;

echo "Area circunferencia de raio $raioAtual e $area<br>";

echo "Valor de pi $valorPi<br>";

?>