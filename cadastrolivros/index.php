<?php
    require_once("menu.php");

    session_start();
    if(isset($_SESSION["cadastroLivros"])) {
        $cadastroLivros = $_SESSION["cadastroLivros"];
        
        echo "<dl>";
        foreach($cadastroLivros as $livro){
            if($livro != null) {
                $nomeLivro = $livro["nomeLivro"];
                $autor = $livro["autor"];
                $isbn = $livro["isbn"];
                $genero = $livro["genero"];
                $formato = $livro["formato"];
                $sinopse = $livro["sinopse"];
                
                echo "<dt class='$nomeLivro'>" . $livro["nomeLivro"] . "</dt>";
                
                echo "<dd>Nome do Livro: " . $nomeLivro . "</dd>";
                echo "<dd>Autor: " . $autor . "</dd>";
                echo "<dd>ISBN: " . $isbn . "</dd>";
                echo "<dd>Gênero: " . $genero . "</dd>";
                echo "<dd>Formato do Livro: " . $formato . "</dd>";
                echo "<dd>Sinopse do Livro: " . $sinopse . "</dd>";
                
                echo "</dl>";
            }
        }
    }
            else {
                echo "Não existem pessoas cadastradas.";
        }
?>
               
                
                

                
                
                
                
                
