<!doctype html>
<html lang="en">
 <?php 
    session_start();
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>IT Helpdesk</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">IT Helpdesk</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        
                        
                  <!-- =============== Nav User =================== -->
                           <?php
                                if(isset($_SESSION['username'])){   
                            ?>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['username'] ?></h5>
                                </div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Logout
                                </a>
                            </div>
                        </li>
                        <?php } else  ?>

                        <!-- =============== Nav User =================== -->
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                                <a href="../home.php">Menu Utama</a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-home"></i> Menu </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                            <a class="nav-link" href="tiket_selesai.php"><i class="fas fa-check"></i>Tiket Laporan Selesai</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="user_control.php"><i class="fas fa-fw fa-user"></i>User Control</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Selamat Datang Di Aplikasi IT Helpdesk</h2>
                                </div>
                                <a href="pdf_selesai.php" target="_blank" class="btn btn-sm btn-outline-primary"  ><i class="fas fa-print"></i>&nbsp;Cetak Laporan</a>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    
                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-15 col-md-6 col-sm-15 col-15">
                                <div class="card">
                                    <h5 class="card-header">Tiket HelpDesk</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Nomor Tiket</th>
                                                        <th class="border-0">Nama</th>
                                                        <th class="border-0">Deskripsi</th>
                                                        <th class="border-0">Jenis Kerusakan</th>
                                                        <th class="border-0">Status Pengerjaan</th>
                                                        <th class="border-0">Waktu Pembuatan Laporan</th>
                                                        <th class="border-0">Waktu Laporan Selesai</th>
                                                        <th class="border-0">Foto Kerusakan</th>
                                                    </tr>
                                                </thead>
                                                <?php

                                                include "../control/koneksi.php";

                                                $query_mysql = mysqli_query($host, "SELECT * FROM kerusakan WHERE status_pengerjaan  LIKE 'selesai'");

                                                while($data = mysqli_fetch_array($query_mysql,MYSQLI_ASSOC)){

                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <td><?php echo $data['id']; ?></td>
                                                        <td><?php echo $data['nama']; ?></td>
                                                        <td><?php echo $data['jenis']; ?></td>
                                                        <td><?php echo $data['jenis_kerusakan']; ?></td>
                                                        <td><span class="badge-dot badge-brand mr-1"></span><?php echo $data['status_pengerjaan']; ?></td>
                                                        <td><?php echo $data['waktu_pembuatan']; ?></td>
                                                        <td><?php echo $data['waktu_selesai']; ?></td>
                                                        <td><img src="<?php echo '../assets/images/'.$data['foto_kerusakan'];?>" width="200px" height="90px"></td>
                                                    
                                                    
                                                    </tr>
                                                    
                                                </tbody>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->
                    
            
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik logout jika anda ingin keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>