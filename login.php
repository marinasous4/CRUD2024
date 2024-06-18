<?php

if (isset($_GET['success'])) {
  if ($_GET['success'] = "ok") {
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
  <form action="verify/logar.php" method="post" class="needs-validation" novalidate>
    <section class="vh-100" style="background-color: #981414;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card text-white" style="border-radius: 3rem; background-color: #000000;">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase p-3">Login</h2>
                  <div data-mdb-input-init class="form-outline form-white mb-4">
                  <label class="form-label" for="typeEmailX">Email</label>
                    <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" required/>
                    <div class="invalid-feedback">Por favor, insira seu email.</div>
                  </div>
                  <div data-mdb-input-init class="form-outline form-white mb-4">
                  <label class="form-label" for="typePasswordX">Senha</label>
                    <input type="password" name="senha" id="typePasswordX" class="form-control form-control-lg" required/>
                    <div class="invalid-feedback">Por favor, insira sua senha.</div>
                  </div>
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg px-5 text-white fw-bold" style="background-color: #981414;" name="submit" type="submit" required>Entrar</button>
                  <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  </div>
                </div>
                <div>
                  <p class="mb-0">Não tem uma conta? <a href="cadastro.php" class="text-white fw-bold" style="text-decoration: none;">Cadastre-se</a>
                  </p>
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
