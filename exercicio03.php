<?php
echo"Digite o valor de A: ";
$A=trim(fgets(STDIN));

echo"Digite o valor de B: ";
$B=trim(fgets(STDIN));

while ($B < 0) {
	print "B não pode ser negativo. Digite novamente: ";
	$B=trim(fgets(STDIN));
}

$potencia = pow($A,$B);

print "Resultado = $potencia";