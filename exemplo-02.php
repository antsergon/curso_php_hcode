<?php
$anoNascimento = 1999; //padrao de declaracao de variaveis
$nomeCompleto = "Antonio Sergio";

//comentario
/*Este é um comentario de bloco */

$nome1 = "Joao";
$sobreNome = "Rangel";
$nomeCompleto = $nome1 . " " .$sobreNome;

echo "$nomeCompleto";
exit;


echo "$nome1";
echo "<br>";

unset($nome1); //deleta a variavel

if (isset($nome1)) {
    echo "$nome1";
}


?>