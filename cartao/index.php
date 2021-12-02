<?php
session_start();
session_destroy();
//require_once('./funcao/conecta.php');
//require_once('./funcao/bd.php');
?>

<style>
body {
    -webkit-animation: colorchange 10s infinite; 
    animation: colorchange 10s infinite;
}
@-webkit-keyframes colorchange {
     0%  {background: #33FFF3;}
    25%  {background: #78281F;}
    50%  {background: #117A65;}
    75%  {background: #DC7633;}
    100% {background: #9B59B6;}
}
@keyframes colorchange {
     0%  {background: #33FFF3;}
    25%  {background: #78281F;}
    50%  {background: #117A65;}
    75%  {background: #DC7633;}
    100% {background: #9B59B6;}
}     
</style>

<!DOCTYPE html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Cartão de Acesso</title>
		<link href="./css/estilo.css" rel="stylesheet">
		<script type="text/javascript" src="./js/javascript.js"></script>
	</head>
	<body class="cartao" onload="document.getElementById('codig').focus()";>
	<center>
		<form name="acesso" id="acesso" method="post" action="autentica.php">
			<div class="input-group mb-3">
				<label for="codig" style="font-size: 30px; font-weight: bold" >Digite o código do cartão:&nbsp </label>
				<input style="border-radius: 10px;" type="text" name="codig" id="codig" value="" size="10" maxlength="9" placeholder=" Código" onkeypress="return apenasNum(event)" onKeyUp="lerCodig(this.value)" autocomplete="off"/>
			<div>
		</form>
	</center>
	</body>
</html>