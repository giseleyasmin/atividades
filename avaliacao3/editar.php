<?php 
    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];
    $novoProduto = $_REQUEST["nome"];
    
    if(!isset($_SESSION["cadastroProduto"])){
       echo "Não existem produtos para editar";
    }
    else{
        $cadastroProduto =& $_SESSION["cadastroProduto"];
        echo "Não existem produtos para editar";
    }
    else{
        $cadastroProduto =& $_SESSION["cadastroProduto"];
        $produto = array("nome" => $novoProduto);
        $cadastroProduto[$id] = $produto;
    }
    echo "Edição efetuada com sucesso!";
?>
