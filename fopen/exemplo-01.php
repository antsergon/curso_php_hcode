<?php

$file = fopen("log.txt", "a+"); //abre um arquivo

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado";