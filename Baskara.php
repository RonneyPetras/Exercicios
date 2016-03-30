<?php
print "digite o valor de a ";
$a = trim(fgets(STDIN));

print "digite o valor de b ";
$b = trim(fgets(STDIN));

print "digite o valor de c ";
$c = trim(fgets(STDIN));

$delta = pow($b,2)-4 *$a*$c;

if ($delta < 0) {
	print "\nEssa equaчуo nao possui raizes reais";
}
else {
	$x1= (-$b + sqrt($delta)) / 2*$a;
	$x2= (-$b - sqrt($delta)) / 2*$a;
print "\nRaizes da equaчуo: ";
print "\nX1 = ".$x1;
print "\nX2 = ".$x2;
}
?>