<?php
require_once("config.php");

$sql = new Sql(); //nova instancia da classe

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array(); //criaçao do array de dados

foreach ($usuarios[0] as $key => $value){ //percorre os dados no array

    array_push($headers, ucfirst($key)); //funçao para escrever o primeiro caracter em caixa alta
}

$file = fopen("usuarios.csv", "w+"); // cria o arquivo e escreve os dados

fwrite($file, implode(",", $headers) . "\r\n");//

foreach ($usuarios as $row) { //percorre linha
    $data = array();

    foreach ($row as $key => $value) { // percorre colunas
        
        array_push($data, $value);
    
    } //fecha foreach de coluna

    fwrite($file, implode(",", $data) . "\r\n");

}//fecha foreach de linha

fclose($file);

echo "Criado com Sucesso!";

