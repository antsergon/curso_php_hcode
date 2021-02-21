<?php


$images = scandir("images"); //percorre os arq do diretorio

$data = array();

foreach ($images as $img){

    if (!in_array($img, array(".", ".."))) {
        
        $filename = "images" .DIRECTORY_SEPARATOR. $img;
        
        $info = pathinfo($filename); //mostra o caminho do arq
        
        $info["size"] = filesize($filename); //retorna o tamanho do arq

        $info["modified"] = date("d-m-Y H:i:s", filemtime($filename)); // retorna a data de modificaçao

        $info["url"] = "http://localhost/curso_php_hcode/dir/".$filename;
        array_push($data, $info);
    }
}

echo json_encode($data);