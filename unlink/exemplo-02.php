<?php

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) { //percorre o diretorio images
    
    if(!in_array($item, array(".", "..", ))){ //verifica o item no array

        unlink("images/" . $item); //remove os arquivos na pasta
    }
}

echo "Ok";
