<?php
    require_once("menu.php");
    
    session_start();
    
    $nomeLivro = $_REQUEST["nomeLivro"];
    $autor = $_REQUEST["autor"];
    $isbn = $_REQUEST["isbn"];
    $genero = $_REQUEST["genero"];
    $formato = $_REQUEST["formato"];
    $sinopse = $_REQUEST["sinopse"];
    
    if(!isset($_SESSION["cadastroLivros"])) {
        $_SESSION["cadastroLivros"] = array();
    }
    
    $livro = array("nomeLivro" => $nomeLivro,
                   "autor" => $autor,
                   "isbn" => $isbn, "genero" => $genero,
                   "formato" => $formato,
                   "sinopse" => $sinopse);
    
    array_push($_SESSION["cadastroLivros"], $livro);
    
    echo"Cadastro efetuado com Sucesso!";
    
    ?>
