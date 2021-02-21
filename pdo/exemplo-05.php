<?php

$conn = new PDO("mysql:host=localhost:3306;dbname=dbphp7", "sergio", "sergio");

$conn->beginTransaction();
//$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN,:PASSWORD)");
$stmt = $conn->prepare("DELETE  FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack(); //cancela a transaçao
$conn->commit(); //confirma a transaçao
echo "Dados apagados com sucesso !!";