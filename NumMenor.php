<?php
print"Insira o primeiro numero ";
$n1=trim(fgets(STDIN));

print"Insira o segundo numero ";
$n2=trim(fgets(STDIN));

print"Insira o terceiro numero ";
$n3=trim(fgets(STDIN));

if ($n1<$n2 && $n1<$n3) {
	print "\nO menor num�ro � ".$n1;
}
else {
	if ($n2<$n1 && $n2<$n3) { 
		print "\nO menor num�ro � ".$n2;
	}
	else {
		print "\nO menor num�ro � ".$n3;
	}
}
?>