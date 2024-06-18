<?php
    session_start();
    require 'verify/conexao.php';
    require './navbar.php';
        if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
   
$sql = 'SELECT * FROM filmes';
$result = $conn->prepare($sql);
$result->execute();
$filmes = $result->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="card mb-3"  style="max-width: 18rem; background-color: #000000; color: #ffffff;">
  <div class="card-body">
    <h5 class="card-title">Filmes</h5>
    <a class="btn" href="filmes.php" style="background-color: #981414; color: #ffffff;">Ver filmes</a>
  </div>
  </div>
  <div class="card mb-3" style="max-width: 18rem; background-color: #000000; color: #ffffff;">
  <div class="card-body">
    <h5 class="card-title">Comidas</h5>
    <a class="btn" href="" style="background-color: #981414; color: #ffffff;">Ver comidas</a>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
