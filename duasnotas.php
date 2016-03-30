<?php

print "Digite a nota do primeiro trimestre: ";
$n1 = trim(fgets(STDIN));

Print "Digite a nota do segundo trimestre: ";
$n2 = trim(fgets(STDIN));

$med =  ($n1+$n2)/2;

print "Media = ".$med;

if ($med<60) {
	print "\nReprovado";
}
else {
	print "\nAprovado";
}
?>