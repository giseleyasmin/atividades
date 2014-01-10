<html>
    <head>
         <title>Cadastro de produtos</title>
    </head> 
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>Digite o còdigo do produto para editar:</label>
            <br/>
            <input type="text" name="id" />
            <br/>
            <label>Novo Produto: </label>
            <br/>
            <input type="text" name="nome" />
            <br/>
            <input type="radio" name="cor" value="a" checked="checked" /><label>Azul</label>
            <input type="radio" name="cor" value="v" /><label>Verde</label>
            <input type="radio" name="cor" value="r" /><label>Vermelho</label>
            <br/>
            <input type="submit" value="Editar" />  
        </form> 
    </body>
</html>

<?php
session_start();
    
    if(isset($_SESSION["cadastroProduto"])){
        $cadastros = $_SESSION["cadastroProduto"];
        
       foreach($cadastros as $id  => $produto){
            if($produto != null){
                
            echo "[$id] => " .$produto["nomeProduto"] . "<br/>";
            }
        }   
        
    }
    else{
        echo "Não existem produtos cadastrados";
    }
?>
