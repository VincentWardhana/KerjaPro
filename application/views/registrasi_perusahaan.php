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
    <header class="intro-header" style="background-image: url('<?php echo base_url() ?>img/registrasi-perusahaan-bg.jpg')">
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
                <!-- <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p> -->
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage" id="" method="post" action="registrasiperusahaancomplete.php" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Nama Perusahaan<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" placeholder="Nama Perusahaan " id="namaperusahaan" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Email<sup style="color:red">*</sup></label>
                            <input type="email" class="form-control" placeholder="Email" id="email" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Password<sup style="color:red">*</sup></label>
                            <input type="password" class="form-control" placeholder="Password" id="password" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Konfirmasi Password<sup style="color:red">*</sup></label>
                            <input type="password" class="form-control" placeholder="Konfirmasi Password" id="konfirmasipassword" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Contact Person<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" placeholder="Contact Person" id="contactperson" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>No. Telpon Kantor<sup style="color:red">*</sup></label>
                            <input type="tel" class="form-control" placeholder="No. Telp Kantor" id="telp" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>No. HP<sup style="color:red">*</sup></label>
                            <input type="tel" class="form-control" placeholder="No. HP" id="hp" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Bergerak Dalam Bidang<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" placeholder="ex : Telekomunikasi" id="bidang" required>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Alamat<sup style="color:red">*</sup></label>
                            <textarea rows="5" class="form-control" placeholder="Alamat" id="alamat" required></textarea>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Kode Pos<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" placeholder="Kode Pos" id="kodepos" required>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Upload Logo Perusahaan (optional) </label>
                            <input type="file" class="form-control" accept="image/*" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>

                    <br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <input type="checkbox" name="t&c" value="agree" required> Saya setuju dan telah membaca <a href="#" style="color:#337ab7">syarat dan ketentuan</a> untuk bermitra dengan KerjaPro
                        </div>
                    </div>
                    
    
                    <br>
                    <div id="success"></div>
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

    <hr>

    <!-- Footer -->
    <?php include "footer.php" ?>
	
	<?php include "loadfilesfooter.php" ?>

</body>

</html>
