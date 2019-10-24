<?php
	
for ($i=0; $i<10; $i++) {
	echo $i . '<br>';
}	


for ($i=0; $i<100; $i+=5) {
	
	// 	quando a condicional possui apenas uma linha de código para executar sua ação, ele pode ser escrito sem chaves e na mesma linha
	
// 	o continue manda ele voltar para o início do loop
	if ($i > 40 && $i <80) continue;
	
	if ($i===90) break;
	
	echo $i . '<br>';
	
}	
	
	
	
?>