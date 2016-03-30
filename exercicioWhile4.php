<?php
echo "Digite um numero: ";
$x=trim(fgets(STDIN));
while($x!=0){
	echo "Numero diferente de zero, digite outro numero: ";
	$x=trim(fgets(STDIN));
}
echo "Numero digitado igual a zero.\nFim";