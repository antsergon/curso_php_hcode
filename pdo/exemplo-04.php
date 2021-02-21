<?php

$conn = new PDO("mysql:host=localhost:3306;dbname=dbphp7", "sergio", "sergio");

//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");
$stmt = $conn->prepare("DELETE  FROM tb_usuarios WHERE idusuario = :ID");

$id = 5;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Dados apagados com sucesso !!";