<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome(" => teste one");
$cad->setEmail("email_teste");
$cad->setSenha("asdfg");


$cad->registrarVenda();