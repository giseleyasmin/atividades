<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])) {
        $_SESSION["cadastros"] = array();
    } 
    
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    $idade = $_REQUEST["idade"];
    $nomeMae = $_REQUEST["nomeMae"];
    $nomePai = $_REQUEST["nomePai"];
    $estado = $_REQUEST["estado"];
    $texto = $_REQUEST["texto"];
    
    $aceito = false;
    if (isset($_REQUEST["aceito"])) {
        $aceito = true;
    }
    

    $camposValidados = true;
    
    $nome = trim($nome);
    
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
    $nomeMae = trim($nomeMae);
     if(empty($nomeMae)){
        echo "Por favor, Preencha o campo nomeMae <br/>";
        $camposValidados = false;
    }
    $nomePai = trim($nomePai);
    if(empty($nomePai)){
        echo "Por favor, Preencha o campo nomePai <br/>";
        $camposValidados = false;
    }
     if($estado == -1){
        echo "Por favor, Preencha o campo estado <br/>";
        $camposValidados = false;
    }
    $texto = trim($texto);
    if(empty($texto)){
        echo "Por favor, Preencha o campo texto <br/>";
        $camposValidados = false;
    }
    
    if($camposValidados){
        $pessoa = array("nome" => $nome,
                        "sexo" => $sexo,
                        "idade" => $idade,
                        "nomeMae" => $nomeMae,
                        "nomePai" => $nomePai,
                        "estado" => $estado,
                        "aceito" => $aceito,
                        "texto" => $texto);
        
        array_push($_SESSION["cadastros"], $pessoa);
        
        echo "Cadastro efetuado com sucesso!";
    }
    else{
        echo "<br/>";
        echo "<input type='button' onclick='history.go(-1)' value='voltar' />";
    }
?>
