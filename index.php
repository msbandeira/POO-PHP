<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Testando a classe usuario</h1>
	
	<?php

	include_once 'usuario.class.php';

	$objusuario = new Usuario();

	$objusuario->nome = "Otavio";
	$objusuario->n1 = 2;
	$objusuario->n2 = 2;

	$objusuario->imprimeUsuario();

	$objusuario = New Usuario();
	$objusuario->n1 = 3;
	$objusuario->subtrair();



	?>

</body>
</html>