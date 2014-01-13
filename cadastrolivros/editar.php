<?php
    require_once("menu.php");
    
    session_start();
    
    $id = $_REQUEST["id"];
    $nomeLivro = $_REQUEST["nomeLivro"];
    $autor = $_REQUEST["autor"];
    $isbn = $_REQUEST["isbn"];
    $genero = $_REQUEST["genero"];
    $formato = $_REQUEST["formato"];
    $sinopse = $_REQUEST["sinopse"];
    
    if(!isset($_SESSION["cadastroLivros"])) {
        echo "Não existem cadastros para editar";
    }
    else {
        $cadastroLivros =& $_SESSION["$cadastroLivros"];
        $livro = array("nomeLivro" => $nomeLivro, "autor" => $autor, "isbn" => $isbn, "genero" => $genero, "formato" => $formato, "sinopse" => $sinopse);
        $cadastroLivros[$id] = $livro;
        }
    
    echo "Edição efetuado com sucesso!";
?>
    
