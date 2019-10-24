<?php
	
//(int) converte o tipo de variável para um número inteiro
$nome = "Capella";

function teste() {
	//pega o nome de variável que está fora do escopo
	global $nome;
	echo $nome;
}

function teste2() {
	
}




///////////// OPERADORES

// atribuição
$nome = "Capella";

// concatenação
$nome = $nome . "web";
$nome .= " Treinamentos";


echo $nome;


$total = 0;

$total +=100;

$total +=25;

$total -=30;

$total *= .9;


echo $total;



$a = 10;
$b = 20;
echo '<br>';
echo 'conta: ' . $a % $b;
// % = módulo. Que parada é essa?

echo '<br>';
var_dump($b < $a);


// um sinal de = apenas atribui valor!
// var_dump( $a = $b );

// para comparação de valor usa-se ==
var_dump( $a == $b );

// para comparação de valoe E de tipo usa-se ===
// === comparação de identidade
var_dump( $a === $b );

echo '<br>Comparando valor: ';
var_dump( $a != $b );

echo '<br>Comparando identidade: ';
var_dump( $a !== $b );





?>