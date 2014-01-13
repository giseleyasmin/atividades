<html>
    <head>
         <title>Cadastro de Livros</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
            <label>Digite o còdigo do livro para remover:</label>
            <br/>
            <input type="text" name="id" />
            <input type="submit" value="Remover" />  
        </form> 
    </body>
</html>

<?php
session_start();
    
    if(isset($_SESSION["cadastroLivros"])){
        $cadastroLivros = $_SESSION["cadastroLivros"];
        
       foreach($cadastroLivros as $id => $livro){
            if($livro != null){
            echo "[$id] => " .$livro["nomeLivro"] . "<br/>";
            }
        }   
        
    }
    else{
        echo "Não existem livros cadastrados";
    }
?>
