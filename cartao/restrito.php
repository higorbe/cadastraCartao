<?php
session_start();
if (!isset($_SESSION['tipo'])) header('location: ./');
if ($_SESSION['tipo']!=2) header('location: ./');
?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<head>
		<meta charset="UTF-8">
		<title>Restrito</title>
		<link rel="stylesheet" href="./css/estilo.css">
	</head>
	<center>
	<body style="background-color: #77DD77; margin-top: 15%;">
		<h1>Página Restrita</h1>
		<a href="./" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Voltar para o Login</a>
	</body>
	</center>
</html>