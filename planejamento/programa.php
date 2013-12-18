<?php

include "../lib/validaDatas.php";


date_default_timezone_set("Brazil/east"); 

$dataAtual = date ('d-m-y');

$di = "";
$df = "";

$di = $_POST["di"];
$df = $_POST["df"];

$vetor1 = explode("/",$di);
$vetor2 = explode("/",$df);
validadata($vetor1[0],$vetor1[1],$vetor1[2]);
validadata($vetor2[0],$vetor2[1],$vetor2[2]);

$di = str_replace("/", "-", $di);
$df = str_replace("/", "-", $df);

$dataAtual = strtotime ($dataAtual);
$di = strtotime ($di);
$df = strtotime ($df);


if($dataAtual >= $di and $dataAtual <= $df){
	  echo"Dia Bom";
}

else{
	 echo "Dia Ruim!";
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
?>


