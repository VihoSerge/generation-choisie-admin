<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Génération Choisi - Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('admin-template/img/logo/logo.png') ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/bootstrap.min.css') ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/font-awesome.min.css') ?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin-template/css/owl.theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin-template/css/owl.transitions.css') ?>">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/meanmenu/meanmenu.min.css') ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/animate.css') ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/normalize.css') ?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/scrollbar/jquery.mCustomScrollbar.min.css') ?>">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/jvectormap/jquery-jvectormap-2.0.3.css') ?>">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/notika-custom-icon.css') ?>">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/wave/waves.min.css') ?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/main.css') ?>">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/style.css') ?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/responsive.css') ?>">
    <!-- modernizr JS
		============================================ -->
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('admin-template/css/jquery.dataTables.min.css') ?>">
    <script src="<?= base_url('admin-template/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>

<body>


    <?= $this->include('layouts/inc/header.php') ?>
    <?= $this->include('layouts/inc/nav.php') ?>
    <?= $this->renderSection('content') ?>

    <!-- jquery
		============================================ -->
    <script src="<?= base_url('admin-template/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/bootstrap.min.js') ?>"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/wow.min.js') ?>"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/jquery-price-slider.js') ?>"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/owl.carousel.min.js') ?>"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/jquery.scrollUp.min.js') ?>"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/meanmenu/jquery.meanmenu.js') ?>"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/counterup/jquery.counterup.min.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/counterup/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/counterup/counterup-active.js') ?>"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/jvectormap/jquery-jvectormap-2.0.2.min.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/jvectormap/jvectormap-active.js') ?>"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/sparkline/jquery.sparkline.min.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/sparkline/sparkline-active.js') ?>"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/flot/jquery.flot.resize.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/flot/curvedLines.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/flot/flot-active.js') ?>"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/knob/jquery.knob.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/knob/jquery.appear.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/knob/knob-active.js') ?>"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/wave/waves.min.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/wave/wave-active.js') ?>"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/todo/jquery.todo.js') ?>"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/plugins.js') ?>"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/chat/moment.min.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/chat/jquery.chat.js') ?>"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/data-table/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('admin-template/js/data-table/data-table-act.js') ?>"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('admin-template/js/main.js') ?>"></script>
</body>

</html>