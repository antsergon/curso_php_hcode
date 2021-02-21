<?php

function __autoload($nomeClasse){

    require_once($nomeClasse.".php");

}


$carro = new Dellrey();
$carro->acelerar(50);