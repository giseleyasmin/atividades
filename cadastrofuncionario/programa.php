<?php
	$nome = $_REQUEST["nome"];
	$senha = $_REQUEST["senha"];
	$sexo = $_REQUEST["sexo"];
	$estadocivil = $_REQUEST["estado_civil"];
	$comentarios = $_REQUEST["comentarios"];
	
	$salvarSenha = false;
	if(isset($_REQUEST["salvar"])) {
		$salvarSenha = true;
	}
	
	if($sexo == "m"){
		$sexo = "masculino";
		$artigo = "o";
	}
	else{
		$sexo = "feminino";
		$artigo = "a";
	}
	
	switch($estadocivil) {
		case 2:
			$estadocivil = "solteir" . $artigo;
			break;
		case 3:
			$estadocivil = "casad" . $artigo;
			break;
		case 4:
			$estadocivil = "divorciad" . $artigo;
			break;
	}
	
	echo "Olá meu nome é $nome, do sexo $sexo, $estadocivil,";
	echo " e gostaria de falar $comentarios <br/>";
	
	if($salvarSenha){
		echo "Eu autorizo que minha senha seja salva - $senha";
	}
	else{
		echo "Eu Não autorizo que minha senha seja salva."; sha1($senha);
	}
?>
