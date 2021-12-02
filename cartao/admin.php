<?php	
	session_start();
	require_once('funcao/xml.php');
	$tagSelect = xml();
	
	if(!isset($_SESSION['tipo'])) header('Location: ./');
	if($_SESSION['tipo'] !=1) header('Location: ./');
	
	require_once('funcao/conecta.php');
	
		
	if (isset($_GET['cart']) && isset($_GET['sTipo'])) {

		if($_GET['sTipo']== 'Mestre'){
			$tipo = 1;
		}
		else{
			$tipo = 2;
		}
		cadCartao($_GET['cart'], $tipo);
	}
	
	if (isset($_GET['del'])) delCartao($_GET['del']);
	
	$linhas = Getselect();

	$tabCartoes = '';
	forEach ($linhas as $linha) {
		$tabCartoes.='<tr>';
		$tabCartoes.='<td>'.$linha['id'].'</td>';
		$tabCartoes.='<td>'.str_replace(1,'Mestre',str_replace(2,'Acesso',$linha['mestre'])).'</td>';
		$tabCartoes.='<td><a href="admin.php?del='.$linha['id'].'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a></td>';
		$tabCartoes.='</tr>';
	}

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cartões Cadastrados</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/estilo.css">
	</head>
	<body style="background-color:goldenrod; margin-top: 15%; font: size 20px;" onload="document.getElementById('tr')">
	<center legend="Cadastro de Cartões">
		<form name="form" id="form" method="get" action="">
			<label style="font-size: 30px; font-weight: bold;" for="tipo">Este cartão será tipo:</label> 
			<?php echo $tagSelect = xml();?>
			<div>
				<label style="font-size: 25px; font-weight: bold;" for="txtCartao">Cartão:</label>
				<input style="border-radius: 10px;" type="text" name="cart" id="cart" value="" size="10" maxlength="9" placeholder=" Código" autocomplete="off" required/>

				<p>
					<button class="btn btn-secondary btn-lg active" type="submit">Cadastrar</button>
					<a href="./" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">Voltar para o Login</a>
				</p>
			</div>
		</form>

		<table class="table table-bordered" style="width:40%">
			<tr>
				<th>Código</th>
				<th>Tipo</th>
				<th>Excluir</th>
			</tr>
			<?php echo $tabCartoes ?>
		</table>

	</center>
	</body>
	</html>