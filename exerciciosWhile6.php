<?php
echo "Digite um numero: ";
$x=trim(fgets(STDIN));
$maior=$x;
while($x!=0){
	echo "Numero diferente de zero, digite outro numero: ";
	$x=trim(fgets(STDIN));	
	if($maior<$x) $maior=$x;
}
echo "\nO maior numero digitado foi : $maior";

[2,3,5,6,9,]