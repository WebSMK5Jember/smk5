<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMKN 5 Jember</title>

    <!-- core CSS -->
    <link href="<?php echo base_url(); ?>layout/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>layout/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>layout/assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>layout/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>layout/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>layout/assets/css/icomoon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>layout/assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>layout/assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>layout/assets/images/ico/logo2.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>layout/assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>layout/assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>layout/assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>layout/assets/images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> (0331) 487535 </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="www.dribbble.com"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="www.skype.com"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>layout/assets/images/logo.png"  width="250" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li ><a href="beranda">Beranda</a></li>
                        <li><a href="<?php echo base_url(); ?>profil">Profil</a></li>

                             <li class="dropdown">
                            <a href="jurusan" class="dropdown-toggle" data-toggle="dropdown">Program Keahlian <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>jurusan/analisiskimia">Kimia Analisis</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/tkj">Teknik Komputer dan Jaringan</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/multimedia">Multimedia</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/holtikultura">Agribisnis Tanaman Pangan dan Holtikultura</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/perkebunan">Agribisnis Tanaman Perkebunan</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/benih">Agribisnis Perbenihan dan Kultur Jaringan Tanaman</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/ruminansia">Agribisnis Ternak Ruminansia</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/unggas">Agribisnis Ternak Unggas</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/pengolahan_pertanian">Teknologi Pengolahan Hasil Pertanian</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/mutu">Pengawasan Mutu Hasil Pertanian dan Perikanan</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/mesin">Alat Mesin Pertanian</a></li>
                                <li><a href="<?php echo base_url(); ?>jurusan/perikanan">Budidaya Perikanan</a></li>

                            </ul>
                        </li>

                        <li><a href="#services.html">Agenda Kegiatan</a></li>
                        <li><a href="<?php echo base_url(); ?>galery">Galeri Foto</a></li>
                       
                        <li><a href="<?php echo base_url(); ?>login">Sistem Informasi</a></li>

                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu Lainnya <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>login_khusus">Akses Khusus</a></li>
                                <li><a href="#blog-item.html">Download File</a></li>
                                
                                
                               
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>