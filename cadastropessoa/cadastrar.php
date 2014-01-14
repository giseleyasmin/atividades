<?php
    require_once("menu.php");
    
    session_start();
    
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    $idade = $_REQUEST["idade"];
    $nomeMae = $_REQUEST["nomeMae"];
    $nomePai = $_REQUEST["nomePai"];
    $estado = $_REQUEST["estado"];
    
    $aceito = false;
    if (isset($_REQUEST["aceito"])) {
        $aceito = true;
    }
    
    if(!isset($_SESSION["cadastros"])) {
        $_SESSION["cadastros"] = array();
    }
    $camposValidados = true;
    
    if(empty($nome)){
        echo "Por favor, Preencha o campo nome <br/>";
        $camposValidados = false;
    }
     if(!isset($sexo)){
        echo "Por favor, Preencha o campo sexo <br/>";
        $camposValidados = false;
    }
     if(empty($idade)){
        echo "Por favor, Preencha o campo idade <br/>";
        $camposValidados = false;
    }
     if(empty($nomeMae)){
        echo "Por favor, Preencha o campo nomeMae <br/>";
        $camposValidados = false;
    }
    if(empty($nomePai)){
        echo "Por favor, Preencha o campo nomePai <br/>";
        $camposValidados = false;
    }
     if($estado == -1){
        echo "Por favor, Preencha o campo estado <br/>";
        $camposValidados = false;
    }
    if($camposValidados){
    $pessoa = array("nome" => $nome,
                    "sexo" => $sexo,
                    "idade" => $idade,
                    "nomeMae" => $nomeMae,
                    "nomePai" => $nomePai,
                    "estado" => $estado,
                    "aceito" => $aceito);
    
    array_push($_SESSION["cadastros"], $pessoa);
    
    echo "Cadastro efetuado com sucesso!";
    }
    else{
        echo "<br/>";
        echo "<input type='button' onclick='history.go(-1)' value='voltar' />";
    }
?>
