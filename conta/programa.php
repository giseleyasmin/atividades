<?php
$mes1 = 0;	
$mes2 = 0;
$mes3 = 0;
$media = 0;
$previsao = 0;

$mes1 = $_POST["mes1"];
$mes2 = $_POST["mes2"];
$mes3 = $_POST["mes3"];

$media = ($mes1+$mes2+$mes3)/3;
echo "Sua media da conta Ã© R$ " . $media . "<br/>";

$previsao = $media / 2.50;
echo "Sua media de consumo Ã© " . $previsao . "mÂ³ <br/>";

echo " A previsao da sua proxima conta com aumento da taria Ã© de R$ " . ($previsao * 3.50);

?>
