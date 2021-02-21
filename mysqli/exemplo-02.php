<?php



$conn =  new mysqli("localhost:3306", "sergio", "sergio", "dbphp7");


if($conn->connect_error){

    echo "Error:" . $conn->connect_error;
    exit;
}

$results = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

 while($row = $results->fetch_Assoc()){

    array_push($data, $row);

    //var_dump($row);
 }

 echo json_encode($data);
 