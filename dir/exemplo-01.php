<?php
//criando um diretorio com php
$name = "images";

if (!is_dir($name)) {
    
    mkdir($name);
    echo "Diretorio criado com sucesso!";
}else{

   // rmdir($name); comando para remover o diretorio
    echo "Ja existe o diretorio: $name". "e removido";
}