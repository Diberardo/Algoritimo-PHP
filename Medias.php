<?php

 define("V1",5);
 define("V2",6);
 define("V3",7);
 define("V4",8);

$A = 1;
$B = 2;
$C = 3;
$D = 4;

$somaA = (V1 + V2 + V3 + V4 )/4;

$somaP = (V1 * $A + V2 * $B + V3 * $C + V4 * $D ) / ( $A + $B + $C + $D );

echo "<p style='color: blue'>Media Aritimatica: " . $somaA . "</p>";
echo "<p style='color: purple'>Media Ponderada: " . $somaP . "</p>";

?>
