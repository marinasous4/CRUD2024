<?php
    session_start();
    require 'verify/conexao.php';
    require './navbar.php';
        if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];

        $sql = "DELETE FROM filmes WHERE id = :id";
        $result = $conn->prepare($sql);
        $result->bindValue(":id", $id);
        $result->execute(); 

        header('Location: filmes.php?=$nome&sucesso=ok');
    }
?>