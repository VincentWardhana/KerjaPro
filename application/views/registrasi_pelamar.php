<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KerjaPRO - Registrasi Pelamar</title>

    <?php include "loadfilesheader.php" ?>

</head>

<body>

    <!-- Navigation -->
    <?php include "navbar.php" ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/registrasi-pelamar-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Registrasi Pelamar</h1>
                        <hr class="small">
                        <span class="subheading">Ingin memiliki pekerjaan dengan mudah? Registrasi disini, biarkan kami membantu anda.</span>
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
                <form name="sentMessage" id="" action="registrasipelamarcomplete.php">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Nama Lengkap<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap " id="namalengkap">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Email<sup style="color:red">*</sup></label>
                            <input type="email" class="form-control" placeholder="Email" id="email">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Password<sup style="color:red">*</sup></label>
                            <input type="password" class="form-control" placeholder="Password" id="password">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Konfirmasi Password<sup style="color:red">*</sup></label>
                            <input type="password" class="form-control" placeholder="Konfirmasi Password" id="konfirmasipassword">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Tanggal Lahir<sup style="color:red">*</sup></label>
                            <input type="date" class="form-control" placeholder="Tanggal Lahir (mm/dd/yyyy)" id="tanggallahir">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Jenis Kelamin<sup style="color:red">*</sup></label><br>
                            <input type="radio" name="jeniskelamin" id="jeniskelamin"> Pria &nbsp; &nbsp;
                            <input type="radio" name="jeniskelamin" id="jeniskelamin"> Wanita
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Status<sup style="color:red">*</sup></label>
                            <select class="form-control" id="status">
                                <option value="status">Status</option>
                                <option value="single">Single</option>
                                <option value="menikah">Menikah</option>
                                <option value="bercerai">Bercerai</option>
                            </select>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>No. Telp<sup style="color:red">*</sup></label>
                            <input type="tel" class="form-control" placeholder="No. Telp" id="telp">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Tinggi Badan<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" placeholder="Tinggi Badan" id="tinggibadan">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Alamat<sup style="color:red">*</sup></label>
                            <textarea rows="5" class="form-control" placeholder="Alamat" id="alamat"></textarea>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Kode Pos<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" placeholder="Kode Pos" id="kodepos">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Pekerjaan yang diminati<sup style="color:red">*</sup></label> <br>
                            <div class="col-xs-12 col-md-6">
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Advisor <br>
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Administration <br>
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Administration <br>
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Administration <br>
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Administration <br>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Advisor <br>
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Administration <br>
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Administration <br>
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Administration <br>
                                <input type="checkbox" name="vehicle" value="Sa"> Sales Administration <br>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Kisaran Gaji<sup style="color:red">*</sup></label>
                            <select class="form-control" id="status">
                                <option value="1-2">Rp 1.000.000 s/d Rp 2.000.000</option>
                                <option value="2-3">Rp 2.000.000 s/d Rp 3.000.000</option>
                                <option value="3-4">Rp 3.000.000 s/d Rp 4.000.000</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Pendidikan Terakhir<sup style="color:red">*</sup></label>
                            <select class="form-control" id="status">
                                <option value="sma">sma</option>
                                <option value="d3">d3</option>
                                <option value="s1">s1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Skill Yang Dimiliki<sup style="color:red">*</sup></label>
                            <input type="text" class="form-control" placeholder="Skill" id="skill">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Pengalaman Kerja<sup style="color:red">*</sup></label>
                            <textarea rows="5" class="form-control" placeholder="Pengalaman Kerja" id="pengalamankerja"></textarea>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Training Yang Pernah Diikuti<sup style="color:red">*</sup></label>
                            <textarea rows="5" class="form-control" placeholder="Pengalaman Kerja" id="pengalamankerja"></textarea>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Deksripsi diri <span style="color:red;font-size:13px">(max 200 huruf)</span></label>
                            <textarea rows="5" class="form-control" placeholder="Deskripsi diri" id="alamat"></textarea>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Jam Kerja Yang Diinginkan<sup style="color:red">*</sup></label>
                            <select class="form-control" id="status">
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <label>Upload CV (optional) </label>
                            <input type="file" class="form-control" accept=".pdf" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>

                    <br>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">
                            <input type="checkbox" name="t&c" value="agree"> Saya setuju dan telah membaca <a href="#" style="color:#337ab7">syarat dan ketentuan</a> untuk bergabung dengan KerjaPro
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
