<?php
print"Insira a 1° nota = ";
$n1=trim(fgets(STDIN));

print"Insira a 2° nota = ";
$n2=trim(fgets(STDIN));

print"Insira a 3° nota = ";
$n3=trim(fgets(STDIN));

print"Insira a 4° nota = ";
$n4=trim(fgets(STDIN));

$media = ($n1+$n2+$n3+$n4)/4;

if ($media<6) {
	print "Média = ".$media."\nReprovado";
}
else {
	print "Média = ".$media."\nAprovado";
}
?>
