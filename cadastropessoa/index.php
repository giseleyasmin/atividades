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
    if(isset($_SESSION["cadastros"])) {
        $cadastros = $_SESSION["cadastros"];

        echo "<dl>";
        foreach($cadastros as $pessoa){
            if($pessoa != null) {
                $sexo = $pessoa["sexo"];
                $idade = $pessoa["idade"];
                $nomeMae = $pessoa["nomeMae"];
                $nomePai = $pessoa["nomePai"];
                $aceito = $pessoa["aceito"];
                $estado = $pessoa["estado"];
                $texto = $texto["texto"];
                
                //titulo da descrição
                echo "<dt class='$sexo'>" . $pessoa["nome"] . "</dt>";
                //detalhes da descrição
                echo "<dd>Sexo: " . $sexo . "</dd>";
                echo "<dd>Idade: " . $idade . "</dd>";
                echo "<dd>Nome Da Mãe: " . $nomeMae . "</dd>";
                echo "<dd>Nome Do Pai: " . $nomePai . "</dd>";
                echo "<dd>Estado: " . $estado . "</dd>";
                echo "<dd>Texto: " . $texto . "</dd>";
                
    
                echo "<dd>Aceito o contrato: ";
                if($aceito){
                    echo "Sim";
                }
                else{
                    echo"Não";
                }
                echo "</dd>";
            }
        }
        echo "</dl>";
    }
    else {
        echo "Não existem pessoas cadastradas.";
        }
?>
