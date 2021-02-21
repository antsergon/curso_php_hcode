<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);
}


class Civic implements Veiculo {

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

$carro = new Civic();

$carro->trocarMarcha(5);

