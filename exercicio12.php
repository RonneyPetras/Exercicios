<?php
print "Informe o primeiro lado do triangulo ";
$l1=trim(fgets(STDIN));

print "Informe o segundo lado do triangulo ";
$l2=trim(fgets(STDIN));

print "Informe o terceiro lado do triangulo ";
$l3=trim(fgets(STDIN));

$t=($l1+$l2+$l3)/2;

$area=sqrt($t*($t-$l1)*($t-$l2)*($t-$l3));

print "A area desse trinagulo é igual a ".$area;

?>