<?php

$nome = "Jose Luiz";
$peso = 105;
$altura = 1.65;

$imc = round($peso / ($altura * $altura),2);

if ($imc < 17) {
	echo "Sr. $nome, seu IMC e: $imc | Muito abaixo do peso.";
}

if ($imc >= 17 && $imc <=18.49) {
	echo "Sr. $nome, seu IMC e: $imc | Abaixo do peso.";
}

if ($imc >= 18.5 && $imc <=24.99) {
	echo "Sr. $nome, seu IMC e: $imc | Peso Normal.";
}

if ($imc >= 25 && $imc <=29.99) {
	echo "Sr. $nome, seu IMC e: $imc | Acima do peso.";
}

if ($imc >= 30 && $imc <=34.99) {
	echo "Sr. $nome, seu IMC e: $imc | Obsidade I.";
}

if ($imc >= 35 && $imc <=39.99) {
	echo "Sr. $nome, seu IMC e: $imc | Obsidade II.";
}

if ($imc >=40) {
	echo "Sr. $nome, seu IMC e: $imc | Obsidade III.";
}

?>