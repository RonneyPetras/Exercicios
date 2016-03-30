<?php

echo "digite um valor numerico: ";
$x =trim(fgets(STDIN));

$x = $x * 2;

while ($x < 3000) {
	print "$x ";
	$x = $x *2;
}