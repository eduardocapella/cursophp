<?php
	
	$diaDaSemana = date('w');
	
	switch($diaDaSemana) {
		
		case 0:
		echo 'Domingo';
		break;
		
		case 1:
		echo 'Segunda-feira';
		break;
		
		default:
		echo "Data inválida";
		break;
	}
	
	
// 	o switch funciona quando você já tem valores de comparação. Do contrário deve-se usar mesmo o if
	
	
?>