<?php
/*
function ola($texto){

    return " ola $texto!! <br>";
}

echo ola("Programadores");
echo ola("Professores");
echo ola("tutores");



function ola($texto = "pessoal", $periodo = "Bom dia"){

    return " ola $texto! $periodo! <br>";
}

echo ola();
echo ola("","Boa noite");
echo ola("Professores","Boa tarde");
echo ola("tutores","");
**/

function ola($texto, $periodo = "Bom dia"){

    return " ola $texto! $periodo! <br>";
}

echo ola("pessoas");
echo ola("","Boa noite");
echo ola("Professores","Boa tarde");
echo ola("tutores" ," ");