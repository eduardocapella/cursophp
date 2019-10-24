<?php
	

$a = NULL;
$b = NULL;
$c = 40;

var_dump($a <=> $b);

// OPERADOR NULL COALESCE -> verifica as variáveis e exibe o 1º valor que for diferente de NULL
echo $a ?? $b ?? $c;


$d = 10;

echo $d++; // ele vai exibir primeiro a variável e DEPOIS incrementa o valor

echo $d;

echo ++$d; // ele incrementa o valor primeiro e depois printa a variável



?>