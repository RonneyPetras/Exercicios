<?php
echo "Digite um numero: ";
$x=trim(fgets(STDIN));
$i=0;
$soma=$x;
while($x!=0){
	echo "Numero diferente de zero, digite outro numero: ";
	$x=trim(fgets(STDIN));
	$soma=$soma+$x;
	$i=$i+1;
}
$med=$soma/$i;
echo "Soma � igual a $soma";
echo "\nQuantidade � igual a $i";
echo "\nM�dia � igual a $med";