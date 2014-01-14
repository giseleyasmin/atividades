<html>
    <head>
        <title>Cadastro de pessoas</title>
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        <form action="editar.php" method="post">
            <label>Digite o código da Pessoa para remover:</label>
            <br/>
              <input type="text" name="id" />
              <br/>
              <br/>
            <?php require_once("campos_pessoa.php"); ?>
              
              <input type="submit" value="Editar" />
        </form>
    </body>
</html>

<?php
    session_start();
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];

        foreach($cadastros as $id => $pessoa){
            if ($pessoa != null){
            echo "[$id] => " . $pessoa["nome"] . "<br />";
            }
        }
    }
    else{
        echo "Não existem pessoas cadastradas.";
        }
?>
