<style>
    .m{
        color: blue;
    }
    .f{
        color: red;
    }
</style>

<?php
    require_once("menu.php");
    
    session_start();
        
    if(isset($_SESSION["cadastros"])){
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $pessoa){
            if($pessoa != null){
                $sexo = $pessoa["sexo"];
                
                echo "<dt class='$sexo'>" . $pessoa["nome"] . "</dt>";
                echo "<dd>Sexo: " . $sexo . "</dd>";
            }
        }
        echo "</dl>";
        
    }
    else{
        echo "Não existem pessoas cadastradas";
    }
?>
