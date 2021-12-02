function lerCodig(codeJavascript) {
	console.log(codeJavascript);
	if (codeJavascript.length == 9)
	document.getElementById("acesso").submit();
}

function apenasNum(e) {
	var charCode = e.charCode ? e.charCode : e.keyCode;
	if (charCode != 8 && (charCode < 48 || charCode > 57)) return false;
}
	