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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?= base_url('admin-template/img/logo/logo.png') ?>" alt="" style="height: 50px;" /></a>
                        <span style="color: white; font-weight: bold;">Génération Choisie</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="<?= base_url() ?>" href="#">Bannieres</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="<?= base_url('podcasts') ?>" href="#">Podcasts</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Programmes</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Vidéos</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a href="<?= base_url() ?>"> Bannieres</a>
                        </li>
                        <li><a href="<?= base_url('podcasts') ?>"> Podcasts</a>
                        </li>
                        <li><a href="#Interface"> Programmes</a>
                        </li>
                        <li><a href="#Charts">Vidéos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-ctn">
                                    <h2 class="align-center">Podcasts</h2>
                                </div>
                                <!-- <div class="breadcomb-wp">
                                     <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div> 
                                    
                                </div> -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Ajouter une banniere" class="btn"><i class="notika-icon notika-paperclip"></i> Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Liste des podcasts</h2>
                            <p>Dans ce tableau se trouve la liste des podcasts ajoutes.</p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Noms</th>
                                        <th>Urls</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($podcast as $podcastItem) : ?>
                                        <tr>
                                            <td><?= $podcastItem['id'] ?></td>
                                            <td><?= $podcastItem['name'] ?></td>
                                            <td><?= substr($podcastItem['url'], 0, 40) ?>...</td>
                                            <td>
                                                <button class=" btn btn-primary" style="margin-bottom: 3px;"><i class="notika-icon notika-edit"></i></button>
                                                <button class=" btn btn-danger" style="margin-bottom: 3px;"><i class="notika-icon notika-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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