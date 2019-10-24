<?php
	
//(int) converte o tipo de variável para um número inteiro
$nome = (int)$_GET['a'];

var_dump($nome);

// pegar o ip
$ip = $_SERVER["REMOTE_ADDR"];
//pega o diretório
$ip .= '<br>' . $_SERVER["SCRIPT_NAME"];
echo '<br>' . $ip;
	
?>