<?php

$pessoa = array(
    'nome' => 'Juca',
    'idade' => 35
);

foreach ($pessoa as $value) {   //passagem de valor por referencia &$value

    if(gettype($value) === 'integer') $value += 10;

    echo $value. '<br>';
}

print_r($pessoa);