<?php 
    require_once("menu.php");

    session_start();
    
    
    $nome = $_REQUEST["nome"];
    $sexo = $_REQUEST["sexo"];
    
     if(!isset($_SESSION["cadastros"])){
       $_SESSION["cadastros"] = array();
    }
    
    $camposValidados = true;
    
    if(empty($nome)){
        echo "Por favor, preencha o campo vazio <br/>";
    } 
    if(!isset($sexo)){
        echo "Por favor, preencha o campo vazio <br/>";
    }
    
    $pessoa = array("nome" => $nome, "sexo" => $sexo);
    
    array_push($_SESSION["cadastros"], $pessoa);
    
    echo "Cadastro efetuado com sucesso!"
    
    else{
        echo "<br/>";
        echo "<input type='button' onclick='history.go(-1)' value='voltar' />";
    }
?>
