<?php 
    require_once("menu.php");

    session_start();
    
    $id = $_REQUEST["id"];
    
    if(!isset($_SESSION["cadastroProduto"])){
       echo "Não existem produtos para remover";
    }
    else{
        $cadastroProduto =& $_SESSION["cadastroProduto"];
        $cadastroProduto[$id] = null;
    }
    echo "Remoção efetuada com sucesso!";
?>
