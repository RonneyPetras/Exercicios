<?php
print "Qual é a altura do retangulo?";
$altura = trim(fgets(STDIN));

print "Qual é a largura do retangulo?";
$largura = trim(fgets(STDIN));

$perimetro = $altura*2+$largura*2;
$area = $altura*$largura;

print "\nPerimetro = ".$perimetro;

print "\nArea = ".$area;
?>