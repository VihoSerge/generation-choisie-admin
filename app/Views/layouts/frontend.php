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
  <!-- font awesome CSS
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
  <!-- summernote CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/summernote/summernote.css') ?>">
  <!-- Range Slider CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/themesaller-forms.css') ?>">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/normalize.css') ?>">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/scrollbar/jquery.mCustomScrollbar.min.css') ?>">
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/notika-custom-icon.css') ?>">
  <!-- bootstrap select CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/bootstrap-select/bootstrap-select.css') ?>">
  <!-- datapicker CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/datapicker/datepicker3.css') ?>">
  <!-- Color Picker CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/color-picker/farbtastic.css') ?>">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/chosen/chosen.css') ?>">
  <!-- notification CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/notification/notification.css') ?>">
  <!-- dropzone CSS
		============================================ -->
  <link rel="stylesheet" href="<?= base_url('admin-template/css/dropzone/dropzone.css') ?>">
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
  <script src="<?= base_url('js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>

<body>


  <?= $this->include('layouts/inc/header.php') ?>
  <?= $this->include('layouts/inc/nav.php') ?>
  <?= $this->renderSection('content') ?>


  <div class="footer-copyright-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="footer-copy-right">
            <p>Copyright © 2018
              . All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

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
  <!-- sparkline JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/sparkline/jquery.sparkline.min.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/sparkline/sparkline-active.js') ?>"></script>
  <!-- flot JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/flot/jquery.flot.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/flot/jquery.flot.resize.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/flot/flot-active.js') ?>"></script>
  <!-- knob JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/knob/jquery.knob.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/knob/jquery.appear.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/knob/knob-active.js') ?>"></script>
  <!-- Input Mask JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/jasny-bootstrap.min.js') ?>"></script>
  <!-- icheck JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/icheck/icheck.min.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/icheck/icheck-active.js') ?>"></script>
  <!-- rangle-slider JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/rangle-slider/jquery-ui-1.10.4.custom.min.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/rangle-slider/jquery-ui-touch-punch.min.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/rangle-slider/rangle-active.js') ?>"></script>
  <!-- datapicker JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/datapicker/bootstrap-datepicker.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/datapicker/datepicker-active.js') ?>"></script>
  <!-- bootstrap select JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/bootstrap-select/bootstrap-select.js') ?>"></script>
  <!--  color-picker JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/color-picker/farbtastic.min.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/color-picker/color-picker.js') ?>"></script>
  <!--  notification JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/notification/bootstrap-growl.min.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/notification/notification-active.js') ?>"></script>
  <!--  summernote JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/summernote/summernote-updated.min.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/summernote/summernote-active.js') ?>"></script>
  <!-- dropzone JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/dropzone/dropzone.js') ?>"></script>
  <!--  wave JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/wave/waves.min.js') ?>"></script>
  <script src="<?= base_url('admin-template/js/wave/wave-active.js') ?>"></script>
  <!--  chosen JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/chosen/chosen.jquery.js') ?>"></script>
  <!--  Chat JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/chat/jquery.chat.js') ?>"></script>
  <!--  todo JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/todo/jquery.todo.js') ?>"></script>
  <!-- plugins JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/plugins.js') ?>"></script>
  <!-- main JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/main.js') ?>"></script>
  <!-- tawk chat JS
		============================================ -->
  <script src="<?= base_url('admin-template/js/tawk-chat.js') ?>"></script>

  <?= $this->renderSection('scripts') ?>
</body>

</html>