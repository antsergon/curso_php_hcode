<?php


$conn = new mysqli("localhost", "sergio", "sergio", "dbphp7");


if($conn->connect_error){

    echo "Error:" . $conn->connect_error;
}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");



$stmt->bind_param("ss",$login, $pass);

$login = "biondo";
$pass = "teste";

$stmt->execute();

$login = "frejat"; //novo user
$pass = "2020";

$stmt->execute();