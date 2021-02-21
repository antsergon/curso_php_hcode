<?php

$conn = new PDO("mysql:host=localhost:3306;dbname=dbphp7", "sergio", "sergio");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");

$login = "jose";
$password = "#bobo";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido com Sucesso!!";