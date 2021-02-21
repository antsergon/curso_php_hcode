<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou ate " . $velocidade ."km/h";
    }

    public function frear($velocidade)
    {
        echo "O veiculo frenou ate " . $velocidade . "km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veiculo trocou a marcha " . $marcha;
    }

}

/*
$carro = new Civic();

$carro->trocarMarcha(5);
*/

class Dellrey extends Automovel{ // extendendo da classe abstrata Automovel

    public function empurrar(){

    }

}

$carro = new Dellrey();
$carro->acelerar(100);