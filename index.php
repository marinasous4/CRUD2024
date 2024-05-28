<?php
    session_start();
    require './verify/conexao.php';
        if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Seja bem-vindo!!</h1>
                <a href="verify/logout.php" style="text-decoration: none; color: #845252;">Sair da conta</a>
        </div>
    </div>
</body>
</html>
