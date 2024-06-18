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
    <title>Filmes</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                    if(count($filmes) > 0) {
                ?>
        </div>
        <div class="row mt-5">
        <div class="col-md-6">
        <table class="table">
  <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Ano</th>
        <th scope="col">Classificação</th>
        <th scope="col">Gênero</th>
        <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($filmes as $filme){
            echo '<tr>';
            echo '<td>' . $filme['id'] . '</td>';
            echo '<td>' . $filme['nome'] . '</td>';
            echo '<td>' . $filme['ano'] . '</td>';
            echo '<td>' . $filme['classificacao'] . '</td>';
            //echo '<td>' . $filme['id_generos'] . '</td>';
            echo '<td> <a class="btn btn-warning" href="">Editar</a>';
            echo '<td> <a  class="btn" style="background-color: #981414; color: #ffffff;" href="">Deletar</a>';
            echo '</tr>';
        }
    ?>
  </tbody>
</table>
<?php
   }else{
    echo '<h1>Você não tem filmes no catálogo.</h1>';
   }
?>
    </div>
    </div>
</div>
<a href="cadastroFilmes.php" class="btn" style="background-color: #000000; color: #ffffff;">Cadastrar</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>