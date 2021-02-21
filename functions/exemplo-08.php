<?php

/**
function soma(int ...$valores):string{

    return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo '<br>';
echo soma(35, 45);
echo '<br>';
echo soma(1.6, 3.9); //so reconhece valores inteiros
echo '<br>';

*/



function soma(float ...$valores):float{

    return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo '<br>';
echo soma(35, 45);
echo '<br>';
echo soma(1.6, 3.9); //so reconhece valores inteiros
echo '<br>';