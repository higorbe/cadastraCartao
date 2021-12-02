<?php
	//Verifica se a variável existe
	if(isset($_POST['codig']))	{
		
		require_once('funcao/conecta.php');
		//Verifica se o código de acesso é válido
		if($data = Getlogin($_POST['codig'])) {
		
			//Inicia a sessão
			session_start();
			$_SESSION['tipo'] = $data['mestre'];
			$tipo = $data['mestre'];
		}
		
		if ($tipo==0) header('location: negado.html');
		if ($tipo==2) header('location: restrito.php');
		if ($tipo==1) header('location: admin.php');
	}
	else {
		header('location: index.php');
	}
?>