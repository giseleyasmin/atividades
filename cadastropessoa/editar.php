<?php
    require_once("menu.php");
    
    session_start();
    
    $id = $_REQUEST["id"];
    $novoNome = $_REQUEST["nome"];
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
        echo "Não existem cadastros para editar";
    }
        else{
            $cadastros =& $_SESSION["cadastros"];
            $pessoa = array("nome" => $novoNome,
                            "sexo" => $sexo,
                            "idade" => $idade,
                            "nomeMae" => $nomeMae,
                            "nomePai" => $nomePai,
                            "aceito" => $aceito,
                            "estado" => $estado,
                            "texto" => $texto);
            $cadastros[$id] = $pessoa;
        }
    
    echo "Edição efetuado com sucesso!";
?>
