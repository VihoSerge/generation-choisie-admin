<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/logo/logo.png') ?>">
  <title>Génération Choisi - Admin</title>

  <!-- Google fonts ============================================ -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css') ?>">


  <!-- Bootstrap JS
============================================ -->
  <script src="<?= base_url('bootstrap/js/bootstrap.bundle.js') ?>"></script>

  <!-- Bootstrap ICONS
		============================================ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


  <style>
    .bg-primary,
    .btn-primary {
      background: #273c8f !important;
    }

    .text-primary {
      color: #273c8f !important;
    }

    .login-form__input input::placeholder {
      font-size: 0.8rem;
      color: #928c8c;
      font-family: inherit;
    }

    html,
    body {
      font-family: 'Josefin Sans', sans-serif;
      height: 100%;
      width: 100%;
    }

    input:focus-visible {
      outline: none;
      border-color: #273c8f;
    }

    .form-control,
    .form-select {
      outline: none !important;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #273c8f;
      border-width: 0.12rem;
      box-shadow: none;
    }

    option:hover {
      color: #fff;
      background: #273c8f;

    }

    .page-link.active,
    .active>.page-link,
    .btn-primary {
      border-color: #273c8f !important;
    }
  </style>
</head>

<body class="bg-primary d-flex justify-content-center align-items-center">

  <div class="container-fluid  ">
    <div class="row justify-content-center">
      <div class="col-md-5 col-lg-4 bg-white p-4 rounded shadow-lg">
        <div class="row text-center ">
          <i class="bi bi-person-circle text-primary display-3 mt-0"></i>
        </div>
        <div class="row">
          <?php
          if (session()->getFlashdata('error')) {
          ?>
            <p class="text-danger text-center">
              <?= session()->getFlashdata('error'); ?>

            </p>
          <?php
          }
          ?>
          <form action="<?= base_url('user/login') ?>" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

            </div>
            <div class=" mb-5">
              <label for="password-input" class="form-label">Mot de passe</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password-input" name="password">
                <span role="button" class="input-group-text " id="basic-addon2"><i class="password-show bi bi-eye-fill text-primary  pointer-event"></i></span>
              </div>
            </div>
            <div class="col-12 text-center mb-3">
              <button type="submit" class="btn btn-primary col-12">Connexion</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    let showPasswordBtn = document.querySelector('.password-show');
    let passwordInput = document.querySelector('#password-input');

    function togglePasswordHandler() {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPasswordBtn.classList.remove('bi-eye-fill');
        showPasswordBtn.classList.add('bi-eye-slash-fill');
        return;
      }
      passwordInput.type = 'password';
      showPasswordBtn.classList.remove('bi-eye-slash-fill');
      showPasswordBtn.classList.add('bi-eye-fill');
    }

    showPasswordBtn.addEventListener('click', togglePasswordHandler);
  </script>
</body>


</html>