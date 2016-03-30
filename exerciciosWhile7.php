<?php
echo"Digite uma temperatura em Celcius :";
$celcius=trim(fgets(STDIN));
$decisao="S";
$i=1;
while($decisao!="N"and $decisao!="n"){
	if ($i!=1){
		echo"Digite uma temperatura em Celcius :";
		$celcius=trim(fgets(STDIN));
	}
	$fah=9*$celcius/5+32;
	echo "A temperatura equivale a :$fah graus Fahrenheint";
	echo "\nRepetir o processo (S/N) ";
	$decisao=trim(fgets(STDIN));
	$i=$i+1;
}
Echo "Fim";
