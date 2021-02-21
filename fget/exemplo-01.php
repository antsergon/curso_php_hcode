<?php

// extraindo dados do arquivo
$filename = "usuarios.csv"; 


if (file_exists($filename)){ //verifica se existe

    $file = fopen($filename, "r");// abre o arquivo e le
   
    $headers = explode(",", fgets($file)); //explode transforma em array

    $data = array();// vai guardar todos os dados finais

    while ($row = fgets($file)) { //enquanto tiver dados ele le
       
        $rowData = explode(",", $row);
        $linha = array(); // vai receber os dados de headers "chaves" e posiçao da $i valores

        for ($i = 0; $i < count($headers); $i++) { // percorre o cabeçalho e pega os itens

            $linha[$headers[$i]] = $rowData[$i]; //array com chave e valor


           }

           array_push($data, $linha); //adicionou o array $linha na variavel $data

    }

    fclose($file);

    echo  json_encode($data);

}

