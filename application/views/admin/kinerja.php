<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard BPBD</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin-2.css')?>" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
  
      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-danger topbar mb-4 static-top" style="z-index: 100;">
          <div class="navbar-brand w-25">
            <h4 href="#" class="tx-spacing--1">
            Jakarta Siaga<sup>112</sup>
            </h4>
          </div> 

          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link text-white" href="Overviewdashboard">
                  &nbsp;Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="Analisis">
                  &nbsp;Insight
              </a>  
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toogle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Region
              </a> 
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="Jakpus">Jakarta Pusat</a>
                  <a class="dropdown-item" href="Jakut">jakarta Utara</a>
                  <a class="dropdown-item" href="Jakbar">Jakarta Barat</a>
                  <a class="dropdown-item" href="Jaktim">Jakarta Timur</a>
                  <a class="dropdown-item" href="Jaksel">Jakarta Selatan</a>
              </div>       
            </li>
            <li class=nav-item>
              <a class="nav-link text-white active" href=#>Performance</a>
            </li>
          </ul>
          
          <div class="navbar-nav ml-auto">
            <i class="fas fa-user-circle regular text-white fa-2x"></i>
          </div>
        </nav>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid bg-white">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center mb-1">
          <h6 class="mb-0 text-dark">DASHBOARD</h6>
          <h6 class="mb-0 text-dark pl-3">/</h6>
          <h6 class="mb-0 text-primary pl-3">Dispatcher Performance</h6>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-between mb-4 pl-3">
            <h5 class=" tx-spacing--1">
                Kinerja Layanan Panggilan Jakarta Siaga 112
            </h5>
              <button class="btn btn-sm border btn-white btn-uppercase" id="daterangepicker">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar wd-10 mg-r-5">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
                  1 November 2019 - 31 November 2019
              </button>
          <!-- <div id="select" class="text-primary"> <text> Pilih data :</text>
              <select id="selection" onchange="pilihElem(this)" class="text-primary">
                <option selected> 30 November 2019</option>
                <option value = ""> 29 November 2019</option>
                <option value = ""> 28 November 2019</option>
                <option value = ""> 27 November 2019</option>
                <option value = ""> 26 November 2019</option>
              </select>
            </div> -->
          </div> 
            <!-- Menampilkan Jam (Aktif) -->
          <!--	<div id="clock" class="col-4 p2 text-primary mb-3"></div>
              <script type="text/javascript">
              function showTime() {
                  var a_p = "";
                  var today = new Date();
                  var curr_hour = today.getHours();
                  var curr_minute = today.getMinutes();
                  var curr_second = today.getSeconds();
                  if (curr_hour < 12) {
                      a_p = "AM";
                  } else {
                      a_p = "PM";
                  }
                  if (curr_hour == 0) {
                      curr_hour = 12;
                  }
                  if (curr_hour > 12) {
                      curr_hour = curr_hour - 12;
                  }
                  curr_hour = checkTime(curr_hour);
                  curr_minute = checkTime(curr_minute);
                  curr_second = checkTime(curr_second);
              document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                  }
          
              function checkTime(i) {
                  if (i < 10) {
                      i = "0" + i;
                  }
                  return i;
              }
            
              setInterval(showTime, 500);
              </script>--> 
      

        <!-- Content Row -->
        <div class="row justify-content-between px-4">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-3 mb-4">
            <div class="card bg-white">
              <div class="card-body">
                <div class="text-xs font-weight-bold text-dark text-uppercase">Total Dispatcher
                </div>
                  <div class="d-flex d-lg-block d-xl-flex align-item-end">
                    <h5 class="tx-rubik mb-0 mr-1">40 dispatcher
                    </h4>
                      <p class="tx-xs  mb-0">
                        <span class="text-medium text-success">9 Active Now
                        </span>
                      </p>
                  </div>      
                  <!--<div class="h5 mb-0 font-weight-bold text-gray-800 align-item-end">99%
                  </div>
                      <div class="col">
                        <div class="progress progress-sm bg-danger mr-2">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100">
                          </div>
                        </div>
                      </div>-->
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-md-9 mb-4">      
            <h4 class="tx-spacing--1">"Rata-Rata Tim Dispatcher Layanan Jakarta Siaga 112
            Berhasil Mengangkat 2.934 Telepon setiap harinya atau Sekitar
            164 Telepon Setiap Jam dengan tingkat panggilan yang berhasil diangkat 99% 
            dari total panggilan"</h4>
            <h6>(1 November 2019 - 31 November 2019)</h6>
          </div>    
        </div>
        <!--end of card-->

        <!-- baris pertama-->
        <div class="row px-4">
          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-white">   
              <img class="card-img-top" src='assets2\img\avatar.jpg' alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Agung</h5>
                <p class="card-text">Dispatcher
                <i class="fas fa-circle text-success pl-1"></i> 
                <span class="text-medium text-success">Active now</span>
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">3084 Complete Call</li>
                <li class="list-group-item">4874 Prank & Drop Call</li>
                <li class="list-group-item">265 Call/Day Average</li>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-white">   
              <img class="card-img-top" src='assets\img\avatar2.jpg' alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Ari</h5>
                <p class="card-text">Dispatcher
                <i class="fas fa-circle text-success pl-1"></i> 
                <span class="text-medium text-success">Active now</span>
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">2987 Complete Call</li>
                <li class="list-group-item">4560 Prank & Drop Call</li>
                <li class="list-group-item">230 Call/Day Average</li>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-white">   
              <img class="card-img-top" src='assets\img\avatar3.jpeg' alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Amri</h5>
                <p class="card-text">Dispatcher
                <i class="fas fa-circle text-danger pl-1"></i> 
                <span class="text-medium text-danger">Inactive</span>
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">2984 Complete Call</li>
                <li class="list-group-item">4444 Prank & Drop Call</li>
                <li class="list-group-item">245 Call/Day Average</li>
              </ul>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-white">   
              <img class="card-img-top" src='assets\img\avatar4.jpg' alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Eni</h5>
                <p class="card-text">Dispatcher
                <i class="fas fa-circle text-danger pl-1"></i> 
                <span class="text-medium text-danger">Inactive</span>
                </p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">2817 Complete Call</li>
                <li class="list-group-item">4214 Prank & Drop Call</li>
                <li class="list-group-item">220 Call/Day Average</li>
              </ul>
            </div>
          </div>         
      </div>

      <!--akhir baris pertama-->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
            
        <!-- Footer -->
        <footer class="sticky-footer bg-danger">
          <div class="container my-auto">
            <div class="copyright text-center my-auto text-white">
              <span>Copyright &copy; BPBD DKI Jakarta 2020</span>
            </div>
        </div>
        </footer>
        <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- end of Page wrapper-->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.js'); ?>"></script>

  <!-- Page level plugin -->
  <script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js'); ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('assets/js/demo/chart-pie-demo-Copy.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/demo/chart-area-demo-Copy.js'); ?>"></script>

</body>
</html>
