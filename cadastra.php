<?php

if(isset($_POST['submit'])){
    if(isset($_POST['email']) && !empty($_POST['email']) && (isset($_POST['senha']) && !empty($_POST['senha']))) {
        require '../conexao.php';

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = 'INSERT INTO usuarios (email, senha) VALUES :email, :senha';
        $result = $conn->prepare($sql);
        $result->bindValue('email', $email);
        $result->bindValue('senha', $senha);
        $result->execute();
        header('Location: ../login.php?success=ok');
    }
}
