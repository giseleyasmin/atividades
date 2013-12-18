
<?php

date_default_timezone_set("Brazil/East");

$atual = getdate();

$date = $atual["mday"];
$diaSemana = $atual["wday"];
$mes = $atual["mon"];
$horas = $atual["hours"] -1;
$ano = $atual["year"];
$minutos = $atual["minutes"];

switch ($atual){
case 0:
echo "Domingo";
break;
 
case 1:
echo "Segunda";
break;
 
case 2:
echo "Terca";
break;
 
case 3:
echo "Quarta";
break;
 
case 4:
echo "Quinta";
break;
 
case 5:
echo "Sexta";
break;
 
case 6:
echo "Sabado";
break;
} 
	echo $date . "/" . $mes . "/" . $ano; 
	"<br/>";
    echo str_pad($horas, 2, "0", STR_PAD_LEFT); 
	echo ":" . $minutos;
?>
