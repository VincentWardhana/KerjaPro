<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KerjaPro - Situs Pencari Pekerja</title>
	
	<?php include "loadfilesheader.php" ?>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php include "navbar.php" ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header">
        <div class="" id="registrasi">
            <div class="row">
                <div class="col-md-6 col-xs-12" style="background-image: url('img/home-bg.jpg')">
                    <div class="site-heading">
                        <h1>Perusahaan</h1>
                        <hr class="small">
                        <span class="subheading">Kami dapat membantu anda menemukan pekerja yang kompeten di bidangnya</span>
                        <br>
                        <form action="registrasi_perusahaan.php">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <center>
                                        <button type="submit" class="btn btn-default">Daftar Sekarang</button>
                                    </center>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12" style="background-image: url('img/contact-bg.jpg')">
                    <div class="site-heading">
                        <h1>Pelamar</h1>
                        <hr class="small">
                        <span class="subheading">Kami dapat membantu anda menemukan perusahaan sesuai bidang karir anda</span>
                        <br>
                        <form action="registrasi_pelamar.php">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <center>
                                        <button type="submit" class="btn btn-default">Daftar Sekarang</button>
                                    </center>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div clas="post-preview">
                    <h2 class="post-title">
                        Mencari Pekerja yang Kompeten? Pekerja yang 
                    </h2>
                    <h3 class="post-subtitle">
                        Problems look mighty small from 150 miles up
                    </h3>

                    <form action="explore.php">
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <center>
                                    <button type="submit" class="btn btn-default">Explore Sekarang</button>
                                </center>
                                
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div clas="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="col-xs-12 col-md-4">
                    <p style="text-align: justify;padding:0 20px;">Anda mencari pelamar yang berkompeten dibidangnya?
                    Daftarkan perusahaan anda sekarang!</p>
                    <center>
                        <img src="img/photos/Photo1.png" style="width:253px;height:253px;border-radius:50%">
                    </center>
                    <br>
                    <center>
                        Stevani Agnes<br>
                        Freelancer Designer
                    </center>
                </div>
                <div class="col-xs-12 col-md-4">
                    <p style="text-align: justify;padding:0 20px;">Anda mencari pelamar yang berkompeten dibidangnya?
                    Daftarkan perusahaan anda sekarang!</p>
                    <center>
                        <img src="img/photos/Photo2.png" style="width:253px;height:253px;border-radius:50%">
                    </center>
                    <br>
                    <center>
                        Stevani Agnes<br>
                        Freelancer Designer
                    </center>
                </div>
                <div class="col-xs-12 col-md-4">
                    <p style="text-align: justify;padding:0 20px;">Anda mencari pelamar yang berkompeten dibidangnya?
                    Daftarkan perusahaan anda sekarang!</p>
                    <center>
                        <img src="img/photos/Photo3.png" style="width:253px;height:253px;border-radius:50%">
                    </center>
                    <br>
                    <center>
                        Stevani Agnes<br>
                        Freelancer Designer
                    </center>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
