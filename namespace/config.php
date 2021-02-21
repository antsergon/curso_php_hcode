<?php

spl_autoload_register(function($nameClass){ //funçao para carregar arquivos de outras pastas

    //var_dump($nameClass);
    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php";

    if (file_exists($filename)) {
       
        require_once($filename);
    }

});

    