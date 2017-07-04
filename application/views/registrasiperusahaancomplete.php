<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KerjaPRO - Registrasi Perusahaan</title>

    <?php include "loadfilesheader.php" ?>

</head>

<body>

    <!-- Navigation -->
    <?php include "navbar.php" ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/registrasi-perusahaan-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Registrasi Perusahaan</h1>
                        <hr class="small">
                        <span class="subheading">Anda mencari tenaga kerja yang kompeten di bidangnya? Jadilah mitra kami, dan temukan mereka!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Terima Kasih (Nama Perusahaan) telah melakukan registrasi, kami telah mengirimkan email atas registrasi yang anda lakukan. Semua data yang telah anda input dapat diubah kembali di <a href="perusahaan/profile.php">profile</a>. Silahkan memulai untuk mengeksplorasi data pekerja dari kami. Selamat Mencari!</p>

                <form action="eksplorasi.php">
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <center>
                                <button type="submit" class="btn btn-default">Eksplorasi Sekarang</button>
                            </center>
                            
                        </div>
                    </div>
                </form>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <?php include "footer.php" ?>
	
	<?php include "loadfilesfooter.php" ?>

</body>

</html>
