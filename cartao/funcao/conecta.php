<?php
	function Getconn() {

		//Variáveis de conexão
		$ip		= 'localhost';
		$bd		= 'atividade';
		$usr	= 'root';
		$sen	= '';

		$conexao = mysqli_connect($ip, $usr, $sen, $bd);
		$charset = mysqli_set_charset($conexao,"utf8");
		return $conexao;
	}

	function Getselect() {
		$sql = "SELECT * FROM cartoes";
		$result = mysqli_query(Getconn(), $sql);
		while($linha = mysqli_fetch_assoc($result)) 
			$linhas[] = $linha;
		mysqli_close(Getconn());
		return $linhas;
	}

	function Getlogin($id) {

		$row=''; 
		$sql = "SELECT mestre FROM cartoes WHERE id = $id";
		$result = mysqli_query(Getconn(),$sql);
		if(mysqli_num_rows($result) > 0)
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			mysqli_close(Getconn());
			return $row;
		return false;
	}

	function cadCartao($cartao, $tipo) {
		
		$sql = "INSERT INTO cartoes (id, mestre)
		VALUES ($cartao, $tipo)";
		if(mysqli_query(Getconn(), $sql)){
			mysqli_close(Getconn());
			return true;
		}
		return false;
	}

	function delCartao($id) {
		
		$sql = "DELETE FROM cartoes WHERE id = $id";
		if(mysqli_query(Getconn(), $sql)){
			mysqli_close(Getconn());
			return true;
		}
		return false;
	}
?>