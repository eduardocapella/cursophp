<?php 

$nome = 'Eduardo Capella';


// converter em maiúscula
echo strtoupper($nome);

echo '<br>';

// converter em minúsculas
echo strtolower($nome);

echo '<br>';

// letras iniciais em maiúsculas e as demais minúsculas
echo ucwords($nome);


echo '<br>';

echo str_replace("a", "@", $nome);

echo '<br>';

echo str_replace("e", "3", $nome);


echo '<br>';

$frase = 'Eduardo Capella é fundador da Capellaweb';


$q = strpos($frase, "fundador");
var_dump($q);


echo '<br>';

$texto = substr($frase, 0, $q);
echo $texto;


echo '<br>';

$texto2 = substr($frase, $q);
echo $texto2;


echo '<br>';

$palavra = 'fundador';

$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));
echo $texto3;



// Documentação do PHP sobre strings: https://www.php.net/manual/pt_BR/ref.strings.php


?>