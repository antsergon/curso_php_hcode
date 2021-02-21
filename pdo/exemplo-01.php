<?php
//exemplo utilizando SQL SERVER
//$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","root", "senha do root");
$conn = new PDO("mysql:dbname=dbphp7;host=localhost:3306", $user = "sergio", $pwd = "sergio");


$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    
    foreach ($row as $key => $value) {
        echo "<strong>" . $key .  ":  </strong>" . $value ."<br/>";
    }

    echo "===================================================<br/>";
}

//var_dump($results);
