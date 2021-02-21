<?php

namespace Cliente;
class Cadastro extends \Cadastro  {

    public function registrarVenda(){

        echo "Registrado uma venda". $this->getNome();
    }
}