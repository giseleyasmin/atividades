<?php

$chocolateB = 0;
$chocolateE = 0;
$promocaoB = 0;
$promocaoE = 0;
$contagem = 0;
     
$chocolateB = $_POST["chocolateB"];
$chocolateE = $_POST["chocolateE"];

$contagem = 3;

while ($contagem <= $chocolateE) {
      $promocaoB = $promocaoB +1;
	  $contagem = $contagem +3;
}

$contagem = 2;

while ($contagem <= $chocolateB) {
      $promocaoE = $promocaoE +1;
	  $contagem = $contagem +2;	  
}

$contagem = 5;

while ($contagem <= ($chocolateB + $chocolateE)) {
     $promocaoB = $promocaoB +1;
	 $contagem = $contagem +5;
}

echo "A quantidade de ChocolatesE: " . ($chocolateE + $promocaoE) . "</br>";
echo "A quantidade de ChocolatesE: " . ($chocolateB + $promocaoB);
?>
