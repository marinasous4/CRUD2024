<?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=cinema", $user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo 'Não deu certo' . $erro->getMessage();
    }
