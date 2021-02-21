<?php

//VARIAVEIS DE ESCOPO
$nome = "Glaucio";

function teste(){
   global $nome;
    echo $nome ."<br>";
}

function teste2(){
    $nome = "Pedro"; // escopo local
    echo "$nome" .""." agora no teste 2";

}

   


teste();
teste2();
?>