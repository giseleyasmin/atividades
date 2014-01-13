<html>
    <head>
        <title>Cadastro de pessoas</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
            ?>
        <form action="cadastrar.php" method="post">
            <label>Digite o còdigo do livro para editar:</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <?php require_once("campos_pessoa.php"); ?>
            <input type="submit" value="Editar" />
        </form>
    </body>
</html>

<?php
session_start();
    
    if(isset($_SESSION["cadastroLivros"])){
        $cadastros = $_SESSION["cadastroLivros"];
        
       foreach($cadastros as $id  => $livro){
            if($livro != null){
                
            echo "[$id] => " .$livro["nomeLivro"] . "<br/>";
            }
        }   
        
    }
    else{
        echo "Não existem livros cadastrados";
    }
?>
