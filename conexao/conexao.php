<?php
    $host = "localhost";
    $port = "80";
    $dbname = "etec";
    $user = "root";
    $pass = " ";

    try{
        //executando conexao com o bd
        $conexao = new PDO("mysql:host=$host;port=$port;dbname=$dbname;$user, $pass");
        $conexao ->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $erro){
        echo "Entre de conexão" .$erro->getMessage(); 
        exit;
    }
    ?>