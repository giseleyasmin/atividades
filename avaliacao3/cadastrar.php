<?php
    require_once("menu.php");
    
    session_start();

   
                $nomeProduto = $_REQUEST["nomeProduto"];
                $cor = $_REQUEST["cor"];
                $prazo = $_REQUEST["prazo"];
                $detalhe = $_REQUEST["detalhe"];
                
                $produtoNovo = false;
                if(isset($_REQUEST["produtoNovo"])){
                    $produtoNovo = true;
                }
                
    if(!isset($_SESSION["cadastroProduto"])) {
        $_SESSION["cadastroProduto"] = array();
        }
        $produto = array("nomeProduto" => $nomeProduto
                         ,"produtoNovo" => $produtoNovo
                            , "cor" => $cor
                            , "prazo" => $prazo
                            , "detalhe" => $detalhe);
    
        array_push($_SESSION["cadastroProduto"], $produto);
        
        echo "Cadastro efetuado com sucesso!"
?>
