<?php

print "Insira o valor do dia ";
$nDia = trim(fgets(STDIN));

print "Insira o valor do Mês ";
$nMes = trim(fgets(STDIN));

if($nMes == 1||$nMes == 3) { $acreDia=0;
}
else{
	if($nMes == 2||$nMes == 4 ||$nMes == 5) { $acreDia=1;
	}
	else{
		if($nMes == 6||$nMes == 7) { $acreDia=2;
		}
		else{
			if($nMes == 9||$nMes == 10) { $acreDia=4;
			}
			else{
				if($nMes == 11||$nMes == 12) { $acreDia=5;
				}
				else{ $acreDia=3;
				}
			}
		}
	}
}
$totalDias = (($nMes-1)*30+$acreDia+$nDia-1);
print "Total de dias é igual a ".$totalDias;
?>