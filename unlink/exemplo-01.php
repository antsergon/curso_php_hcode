<?php

$file = fopen("teste.txt", "w+"); //cria o arq

fclose($file); //fecha o arquivo


unlink("teste.txt");//remove o arquivo

echo "Arquivo removido com sucesso";

