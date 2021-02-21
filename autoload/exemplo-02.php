<?php

define('DIRECTORY_SEPARATOR', "/");

    function incluirClasses($nomeClasse){

        if(file_exists($nomeClasse.".php") === true){

            require_once($nomeClasse.".php");
        }
       
    }
    spl_autoload_register("incluirClasses");
    spl_autoload_register(function($nomeClasse){

        if (file_exists("Abstrata". DIRECTOR_SEPARATOR . $nomeClasse. ".php") === true) {
            require_once("Abstrata". DIRECTOR_SEPARATOR . $nomeClasse. ".php");
        }
    });


$carro = new Dellrey();
$carro->acelerar(120);