
<?php
    $camposValidados = true;
    
    function validaPessoa($nome, $cpf, $nascimento, $sexo, $estado, $telefone, $observacoes){
        $validaPessoa = true;
    
    //nome
    $nome = trim($nome);
    
        if(empty($nome)){
            echo "Por favor, Preencha o Campo Nome. <br/>";
            $camposValidados = false;
        }
        
        if(! preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s]+$/" ,$nome)){
            echo "O Campo Nome Permite Somente Letra. <br/>";
            $camposValidados = false;
    
        }
    //cpf
    $cpf = trim($cpf);
    
        if(empty($cpf)){
            echo "Por favor, Preencha o Campo CPF. <br/>";
            $camposValidados = false;
    }
        else if (!preg_match("/^\d{3}\\.\d{3}\\.\d{3}\\-\d{2}$/",$cpf)){
            echo "Formato do CPF inválido<br/>";
            $camposValidados = false;
    }
    //nas
    $nascimento = trim($cpf);
    
        if(empty($nascimento)){
            echo "Por favor, Preencha a Data de Nascimento<br/>";
            $camposValidados = false;       
        }
        if(!preg_match("/^\d{2}\\/\d{2}\\/\d{4}$/", $nascimento)){
            echo "Formato inválido de nascimento. Utilize o formato dd/mm/aaaa<br/>";
            $camposValidados = false;               
        }
        else{
        $pedacos = explode('/', $nascimento);
        $dia = $pedacos[0];
        $mes = $pedacos[1];
        $ano = $pedacos[2];    

        if(!checkdate($mes, $dia, $ano)){
            echo "Data inválida";
            $camposValidados = false;
        }
        else{
            $dataYmd = $ano.$mes.$dia;
            $dataAtual = date('Ymd');
    
        if($dataAtual < $dataYmd){
            echo "Não Pode Cadastrar Datas de Nascimento Para o Futuro.<br/>";
            $camposValidados = false; 
            }
        }
    }
    //sexo
    
        if(!isset($sexo)){
            echo "Por favor, Preencha o Campo Sexo. <br/>";
            $camposValidados = false;
    }
    //estado
    $estado = trim ($estado);
    
        if($estado == "-1"){
            echo "Por favor, Preencha o Campo Estado. <br/>";
            $camposValidados = false;
    }
    //telefone
    $telefone = trim ($telefone);
    
        if(empty($telefone)){
            echo "Por favor, Preencha o Campo Telefone. <br/>";
            $camposValidados = false;
    }

        if (!preg_match("/^\d{3}\\\s\d{4}\\S-\d{4}+$/" ,$telefone)){
            echo "O Campo Telefone Permite Somente Números. <br/>";
            $camposValidados = false;
    }
    //observaçoes
    $observacoes = trim($observacoes);
    
        if(empty($observacoes)){
            echo "Por favor, Preencha o Campo Observacoes. <br/>";
            $camposValidados = false;
    }
        else if (!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇ\s\\.\\,]+$/", $observacoes)){
            echo "O Campo Observações Permite Somente Letras,Letras Acentuadas,Espaço,Pontos e Vírgulas. $observacoes<br/>";
            $camposValidados = false;
    }
    
        return $camposValidados;
 }
?>    
    
    
