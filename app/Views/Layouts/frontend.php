<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Génération Choisi - Admin</title>
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/logo/logo.png') ?>">

  <!-- Google fonts ============================================ -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

  <!-- Data Tables CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.css') ?>">

  <!-- Bootstrap ICONS
		============================================ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Bootstrap JS
		============================================ -->
  <script src="<?= base_url('bootstrap/js/bootstrap.bundle.js') ?>"></script>



  <style>
    * {
      /* margin: 0;
      padding: 0 !important;
      box-sizing: border-box; */
    }

    html,
    body {
      font-family: 'Josefin Sans', sans-serif;
      height: 100vh;
    }

    body {
      position: relative;
    }

    .bg-primary,
    .btn-primary,
    .page-link.active,
    .active>.page-link {
      background: #273c8f !important;
    }

    .page-link.active,
    .active>.page-link,
    .btn-primary {
      border-color: #273c8f !important;
    }


    .nav-link:hover,
    .nav-link:active {
      border-bottom: #273c8f solid 0.1rem;
      color: #273c8f;
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

    .active {
      color: #273c8f !important;
    }


    .custom-file-button input[type=file] {
      margin-left: -2px !important;
    }

    .custom-file-button input[type=file]::-webkit-file-upload-button {
      display: none;
    }

    .custom-file-button input[type=file]::file-selector-button {
      display: none;
    }

    .custom-file-button:hover label {
      background-color: #dde0e3;
      cursor: pointer;
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">
  <?= $this->include('Layouts/inc/header.php') ?>
  <?= $this->include('Layouts/inc/navbar.php') ?>
  <?= $this->renderSection('content') ?>
  <?= $this->include('Layouts/inc/footer.php') ?>
  <?= $this->renderSection('script') ?>






  <script src="<?= base_url('bootstrap/js/jqueryDatatable.js') ?>"></script>
  <script src="<?= base_url('bootstrap/js/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('bootstrap/js/dataTables.bootstrap5.min.js') ?>"></script>
  <script src="<?= base_url('bootstrap/js/script.js') ?>"></script>
</body>


</html>