<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Layanan Jakarta Siaga 112</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets2/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets2/css/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color" >
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <h1 class="white text-center" href="#">#JAKARTA SIAGA<br/>112</h1>

            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Layanan</a></li>
                <li class=""><a href="#about">Tentang</a></li>
                <li data-toogle="modal" data-target="#loginadmin"><a href="#">
                <span class="glyphicon glyphicon-user"></span>Login</a></li> 
                <!--<li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toogle" href="" id="logindropdown" role="button" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Login</span></a>
                  <div class="dropdown-menu">
                    <form class="form-horizontal" method="post" accept-charset="UTF-8">
                      <input class="form-control login" type="text" name="username" placeholder="Username.."><br>
                      <input class="form-control login" type="password" name="password" placeholder="Password.."><br>
                      <input class="btn btn-primary" type="submit" name="submit" value="Login">
                    </form>
                  </div> 
                </li>-->
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <!-- modal login -->
      <div id="loginadmin" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-tittle">Masuk sebagai admin</h4>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-succes" data-dismiss="modal">Login</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
      </div>
      <!--akhir modal login--> 

      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="logo_jakarta.png " class="img-responsive" width="70" height="70">
              <img src="BPBD_png.png" class="img-responsive" width="70" height="70">
            </div>
            <div class="banner-text text-center">
              <h1 class="white">Dashboard Layanan Darurat<br/>Jakarta Siaga</h1>
              <h2 class="yellow">112</h2>
              <hr width="500">
              <p></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
              <a class="btn btn-appoint" href="Overviewdashboard">Masuk ke dashboard</a>
            </div>
            <div class="overlay-detail text-left">
              <a href="#service"><i class="fa fa-angle-double-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Layanan Kami</h2>
          <hr class="botm-line">
          <p>Layanan Jakarta Siaga 112 ini bertujuan antara lain untuk mengoptimalkan pelayanan kepada masyarakat untuk menangani keadaan gawat darurat, mengintegrasikan semua layanan telepon pengaduan
             dan pemberian informasi gawat darurat dari satuan Kerja Perangkat Daerah (SKPD), instansi pemerintah dan instansi terkait lainnya,
             layanan ini mempermudah masyarakat dalam mengakses dan mendapatkan layanan 
            gawat darurat serta mempermudah koordinasi penanganan keadaan gawat darurat.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-bell"></i>
            </div>
            <div class="icon-info">
              <h4>24 Jam / 7 Hari</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Ambulans Gawat Darurat</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-fire-extinguisher"></i>
            </div>
            <div class="icon-info">
              <h4>Penanganan Kebakaran</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Penanganan Kecelakaan dan Penyelamatan Manusia</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
       <div class="col-md-4 col-sm-4">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-times-circle"></i>
            </div>
            <div class="icon-info">
              <h4>Penanganan Tindak Kriminal dan Terorisme</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ban"></i>
            </div>
            <div class="icon-info">
              <h4>Penanganan Kejadian Kebencanaan</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-minus-circle"></i>
            </div>
            <div class="icon-info">
              <h4>Penanganan Hewan Buas dan Berbisa</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Penanganan Kegawatdaruratan Lainnya</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>     
    </div>
  </section>
  <!--/ service-->
    <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">The Medilap <br>Ultimate Dream</h2>
            <hr class="botm-line">
            <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
            <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ about-->
  <!--doctor team-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Tim Kami yang bertugas!</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="assets2/img/avatar.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Rahmat</h3>
              <p>Kepala</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="assets2/img/avatar.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Budi</h3>
              <p>Dispatcher</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="assets2/img/avatar.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Wawan</h3>
              <p>Dispatcher</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="assets2/img/avatar.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Ahmad</h3>
              <p>Dispatcher</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ doctor team-->
  
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Tentang Kami</h4>
            </div>
            <div class="info-sec">
              <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding text-center">Ikuti Kami</h4>
            </div>
            <div class="info-sec text-center">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue "><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright Polstat STIS - BPBD DKI, 2020.<br/> All Rights Reserved
            <!--<div class="credits">
              
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
              
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->
  <script src="<?php echo base_url(); ?>assets2/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets2/js/jquery.easing.min.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets2/js/custom.js"></script>
  <script src="<?php echo base_url(); ?>assets2/contactform/contactform.js"></script>

</body>

</html>