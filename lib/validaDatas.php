<?php


function validaDia($dia, $limite){
	if($dia < 1 or $dia > $limite){
		echo"Dia Inválido!<br/><br/>";
  		return false;

	}
	return true;
}

function validaData($dia,$mes,$ano){
	$resultado = true;

	switch($mes){
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
			$resultado = validaDia($dia,31);
				break;

		case 4:
		case 6:
		case 9:
		case 11:
			$resultado = validaDia($dia,30);
				break;

		case 2:
			if (($ano%4==0)and($ano%100!=0) or ($ano%400==0)){
				$resultado = validaDia($dia,29);
					break;
	}
			else{
				$resultado = validaDia($dia,28);
					break;
			}
		
       		default:
				echo "Mês Inválido!";
				return false;
		}

		return $resultado;
}


?>
