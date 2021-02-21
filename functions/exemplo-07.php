<?php


function soma(int ...$valores){

    return array_sum($valores);
}

echo soma(2, 2);
echo '<br>';
echo soma(35, 45);
echo '<br>';
echo soma(1.6, 3.9); //so reconhece valores inteiros
echo '<br>';