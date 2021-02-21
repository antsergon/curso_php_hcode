<?php

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){

        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor():float{
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getAno():int{
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function exibir(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()

        );
    }
}

$novo_carro = new Carro(); //instancia da classe
$novo_carro->setModelo("Onix"); //atributos via metodo set
$novo_carro->setMotor("1.0");
$novo_carro->setAno("2020");
//print_r($novo_carro->exibir());
var_dump($novo_carro->exibir());

