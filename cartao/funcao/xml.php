<?php
	function xml($caminho='xml/opcoes.xml'){
		$xml = simplexml_load_file($caminho);
		$vetor = (array)$xml;
		$tag = '<select name="sTipo" id="slTipo">';
		forEach ($vetor['opcao'] as $opc)
			$tag .="<option value='$opc'>$opc</option>";
		$tag .="</select>";
		return $tag;
	}
?>