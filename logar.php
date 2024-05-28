<?php

    if(isset($_POST['submit'])){
        if(isset($_POST['email']) && !empty($_POST['email']) && (isset($_POST['senha']) && !empty($_POST['senha']))) {
            session_start();
            require 'conexao.php';

            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $sql = 'SELECT * FROM users WHERE email = :email AND senha = :senha';
            $result = $conn->prepare($sql);
            $result->bindValue('email', $email);
            $result->bindValue('senha', $senha);
            $result->execute();

            if($result->rowCount() > 0){
                $dado = $result->fetch();

                header('Location: ../index.php');

                $_SESSION['id'] = $dado['id'];
                
            }
        }
    }