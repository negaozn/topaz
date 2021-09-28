<?php

try{
    // definições de host, database, usuário e senha
    $host = "localhost";
    $db   = "topaz";
    $user = "root";
    $pass = "";

    $conn = mysqli_connect($host,$user,$pass,$db);
    $query = "SELECT * FROM topaz.desafio_tpz";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_NUM);
}
catch(Exception $e){
    echo "Erro no Banco: ",$e->getMessage(), "\n";
}
?>