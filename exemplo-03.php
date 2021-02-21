<?php


$nomeCompleto = "Antonio Sergio";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.33;
$bloqueado = false;

/*Tipos de variáveis compostas => array e objetos*/

$frutas = array("abacaxi","laranja","manga");

echo "$frutas[2] <br>";

$nascimento = new DateTime();

//var_dump($nascimento);

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

$nulo = null; //nao existe



?>