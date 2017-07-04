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
                        <form action="<?php echo base_url()."index.php/main/companyregistration"; ?>">
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
                        <form action="<?php echo base_url()."index.php/main/employeeregistration"; ?>">
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Man must explore, and this is exploration at its greatest
                        </h2>
                        <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Science has not yet mastered prophecy
                        </h2>
                        <h3 class="post-subtitle">
                            We predict too much for the next year and yet far too little for the next ten.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <?php include "footer.php" ?>
	
	<?php include "loadfilesfooter.php" ?>

</body>

</html>
