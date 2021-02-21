<?php

$conn = new PDO("mysql:host=localhost:3306;dbname=dbphp7", "sergio", "sergio");

//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin= :LOGIN, dessenha= :PASSWORD WHERE idusuario = :ID");

$login = "jose quina";
$password = "#sortegrande";
$id = 5;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados Alterados !!";