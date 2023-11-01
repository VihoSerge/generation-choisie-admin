<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/logo/logo.png') ?>">
  <link rel="stylesheet" href="style.css" />
  <title>Génération Choisi - Admin</title>



  <script src="script.js" defer></script>
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css') ?>">


  <!-- Bootstrap JS
============================================ -->
  <script src="<?= base_url('bootstrap/js/bootstrap.bundle.js') ?>"></script>

  <style>
    .bg-primary {
      background: #273c8f !important;
    }
  </style>
</head>

<body class="bg-primary">
  <div class="container">
    <div class="login">
      <div class="login-top">
        <h1 class="login-top__title">Authentification</h1>
      </div>
      <div class="login-form">
        <form action="<?= base_url('user/login') ?>" method="post">
          <div class="login-form__input">
            <div class="login-form__input-icon">
              <i class="fa-solid fa-user login-form__input-icon__item"></i>
            </div>
            <input type="email" name="email" placeholder="Saisissez votre email" required />
          </div>
          <div class="login-form__input">
            <div class="login-form__input-icon">
              <i class="fa-solid fa-lock login-form__input-icon__item"></i>
            </div>
            <input type="password" name="password" id="password-input" placeholder="Saisissez votre mot de passe" required />
            <i class="fa-solid fa-eye show-password"></i>
          </div>
          <p class="forget-password__message">Mot de passe oublié?</p>
          <button class="login-button">Connexion</button>
          <p class="not-member-question">
            Vous n'avez pas de compte? <a href="#" class="signup-link">Inscrivez-vous.</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>

</html>