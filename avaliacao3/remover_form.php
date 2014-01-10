<html>
    <head>
         <title>Cadastro de Produtos</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
            <label>Digite o còdigo do produto para remover:</label>
            <br/>
            <input type="text" name="id" />
            <input type="submit" value="Remover" />  
        </form> 
    </body>
</html>

<?php
session_start();
    
    if(isset($_SESSION["cadastroProduto"])){
        $cadastros = $_SESSION["cadastroProduto"];
        
       foreach($cadastros as $id => $produto){
            if($produto != null){
            echo "[$id] => " .$produto["nomeProduto"] . "<br/>";
            }
        }   
        
    }
    else{
        echo "Não existem produtos cadastrados";
    }
?>
