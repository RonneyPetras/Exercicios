<?php
print "Qual � a altura do retangulo?";
$altura = trim(fgets(STDIN));

print "Qual � a largura do retangulo?";
$largura = trim(fgets(STDIN));

$perimetro = $altura*2+$largura*2;
$area = $altura*$largura;

print "\nPerimetro = ".$perimetro;

print "\nArea = ".$area;
?>