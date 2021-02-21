<?php

abstract class Animal{

    public function falar(){
        return "som";
    }

    public function mover(){

        return "anda";
    }
}

class Cachorro extends Animal {

    public function falar()
    {
        return "latir";
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
 echo $pluto->mover() . "<br/>";

 class Gato extends Animal{

    public function falar(){
        return "mia";
    }
 }

 echo "-----------------------<br/>";

 $miau = new Gato();
 echo $miau->falar();
 echo "<br/>";
 echo $miau->mover() . "<br/>";


 class Passaro extends Animal{

    public function falar()
    {
        return "Canta";
    }

    public function mover(){
        return "Voa e  " . parent::mover();
    }
 }


 echo "-----------------------<br/>";

 $ave =  new Passaro();
 echo $ave->falar() . "<br/>";
 echo $ave->mover();