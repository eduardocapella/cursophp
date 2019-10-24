<?php

include "exemplo-01.php";

$resultado = somar(10,20);
echo $resultado;

//require obriga que o arquivo exista e que esteja funcionando corretamente. Se não estiver ele gera um erro fatal e interrompe o código
// require_once impede que o mesmo recurso seja importado mais de uma vez

//o include tenta executar mesmo com os erros e possui mais recursos que o request
	
?>