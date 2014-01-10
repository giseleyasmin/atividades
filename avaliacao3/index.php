<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastroProduto"])){
        $cadastroProduto = $_SESSION["cadastroProduto"];
        
    echo "<dl>";
    
    foreach($cadastroProduto as $produto){
            if($produto != null){
                $nomeProduto = $produto["nomeProduto"];
                $produtoNovo = $produto["produtoNovo"];
                $cor = $produto["cor"];
                $prazo = $produto["prazo"];
                $detalhe = $produto["detalhe"];
                
    
    echo "<dt class='$nomeProduto'>" . $produto["nomeProduto"] . "<dt/>";
    
                echo "<dd>Nome do Produto: " . $nomeProduto . "</dd>";
                echo "<dd>Produto Novo: " . $produtoNovo . "</dd>";
                echo "<dd>Cor: " . $cor . "</dd>";
                echo "<dd>Prazo: " . $prazo . "</dd>";
                echo "<dd>Detalhe do Produto: " . $detalhe . "</dd>";
                
                echo "</dl>";
            }
        }
    }    
        else {
              echo "Não existem produtos cadastrados.";
        }
        
?>
    
