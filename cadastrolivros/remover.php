<?php
    require_once("menu.php");
    
    session_start();
    
    $id = $_REQUEST["id"];
    
    if(!isset($_SESSION["cadastroLivros"])) {
        echo "Não existem cadastros para remover";
    }
        else{
            $cadastroLivros =& $_SESSION["cadastroLivros"];
            $cadastroLivros[$id] = null;
        }
    
    echo "Remoção efetuado com sucesso!";
?>
