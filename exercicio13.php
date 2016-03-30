<?php

print "Digite c para converter Celsius ou f para Fahrenheit (minusculo) ";

$temp=trim(fgets(STDIN));


if ($temp == "c"||$temp =="f") {
	print "Quanto é a temperatura? ";
	
	if ($temp=="c") {
	
		$valorc=trim(fgets(STDIN));
		$resultado=1.8*$valorc+32;
		//print "igual a Grau Celsius ";	
	}
	else {
		$valorf=trim(fgets(STDIN));
		
		$resultado=($valorf-32)/1.8;
		//print "igual a Graus Fahrenheit ";
	}
	print "Conversão = ".$resultado;
	
	
}
else {
	print "\nValor invalido";
	
}

	



?>