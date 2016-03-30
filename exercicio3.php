<?php
print"Insira o 1° numero = ";
$n1=trim(fgets(STDIN));

print"Insira o 2° numero = ";
$n2=trim(fgets(STDIN));

print"Insira o 3° numero = ";
$n3=trim(fgets(STDIN));

print"Insira o 4° numero = ";
$n4=trim(fgets(STDIN));

$media = ($n1+$n2+$n3+$n4)/4;

print"\nA média dos valores e igual a = ".$media;
?>