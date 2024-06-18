<?php
    session_start();
    require 'verify/conexao.php';
    require './navbar.php';
        if(!isset($_SESSION['id'])){
        header('Location: login.php');
    }
   
/*$sql = 'SELECT * FROM filmes';
$result = $conn->prepare($sql);
$result->execute();
$filmes = $result->fetchAll(PDO::FETCH_ASSOC);*/

if(isset($_POST['submit'])) {
    if(
        isset($_POST['filme']) && !empty($_POST['filme']) &&
        isset($_POST['ano']) && !empty($_POST['ano']) &&
        isset($_POST['classificacao']) && !empty($_POST['classificacao']) &&
        isset($_POST['generos']) && !empty($_POST['generos']))
        {
            $nome = $_POST['filme'];
            $ano = $_POST['ano'];
            $classificacao = $_POST['classificacao'];
            $generos = $_POST['generos'];
            $sql = "INSERT INTO filmes(nome, ano, classificacao, generos) VALUES(:nome, :ano, :classificacao, :generos)";
            $result->bindValue(':nome', $nome);
            $result->bindValue(':ano', $ano);
            $result->bindValue(':classificacao', $classificacao);
            $result->bindValue(':generos', $generos);
            $result = $conn->prepare($sql);
            $result->execute();


            header('Location: filmes.php?=$nome&sucesso=ok');
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form action="filmes.php" method="post" class="needs-validation" novalidate>
    <section class="vh-100">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card text-white" style="border-radius: 3rem; background-color: #000000;">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase p-3">Cadastro de Filmes</h2>
                  <div class="row mb-3">
                    <div class="col">
                    <div data-mdb-input-init class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Filme</label>
                    <input type="text" name="filme" id="typeEmailX" class="form-control form-control-lg" required/>
                    <div class="invalid-feedback">Por favor, insira um filme.</div>
                  </div>
                  <div class="col">
                    <div data-mdb-input-init class="form-outline form-white mb-4">                    
                    <label class="form-label" for="typePasswordX">Gênero</label>
                      <select id="inputEstado" class="form-select">
                        <?php
                          $sql = "SELECT * FROM generos";
                          $result = $conn->prepare($sql);
                          $result->execute();
                          $genero = $result->fetchAll(PDO::FETCH_ASSOC);
                          if(count($genero) > 0){
                            foreach ($generos as $genero){
                              echo "<option value='" . $generos['id'] . "'> " . $genero['genero'] . "</option>";
                            }
                          }
                        ?>
                      </select>
                    <div class="invalid-feedback">Por favor, insira um gênero.</div>
                  </div>
                </div>
                </div>
                </div>
                </div>
                  <div data-mdb-input-init class="form-outline form-white mb-4">                    
                    <label class="form-label" for="typePasswordX">Classificação</label>
                    <select id="inputEstado" class="form-control" name="classificacao">
                        <option selected>Classificação</option>
                        <option>Livre</option>
                        <option>10</option>
                        <option>12</option>
                        <option>14</option>
                        <option>16</option>
                        <option>18</option>
                      </select>                    
                      <div class="invalid-feedback">Por favor, insira uma classificação.</div>
                  </div>
                  <div data-mdb-input-init class="form-outline form-white mb-4">                    
                    <label class="form-label" for="typePasswordX">Ano</label>
                    <input type="number" name="ano" id="typePasswordX" class="form-control form-control-lg" required/>
                    <div class="invalid-feedback">Por favor, insira um ano.</div>
                  </div>
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg px-5 text-white fw-bold" style="background-color: #981414;" name="submit" type="submit" required>Cadastrar</button>
                  <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </form>
  </section>
  <script>
    (() => {
  'use strict'

  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }


      form.classList.add('was-validated')
    }, false)
  })
})()
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>