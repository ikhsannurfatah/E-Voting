<?php
  include "../../lib/config.php";
  include "../../lib/koneksi.php";

session_start();

if(empty($_SESSION['username'])){ ?>
<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: 'Silahkan login terlebih dahulu!'
        }).then((result) => {
            window.location='index.php';
        })
    </script>
<?php 

} else{

  $user =$_SESSION['username'];
  $sqlSelect=mysqli_query($koneksi,"SELECT * FROM tbl_user WHERE username='$user'");
}
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Dashboard E-Voting</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icon-white.png">
    <!-- Pignose Calender -->
    <link href="assets/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="assets/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="#">
                    <b class="logo-abbr"><img src="assets/images/icon-white.png" alt="" height="25" width="25"> </b>
                    <span class="logo-compact"><img src="assets/images/logo1.png" alt="" height="30" width="90"></span>
                    <span class="brand-title">
                        <img src="assets/images/logo1.png" alt="" height="30" width="90">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>

                  <?php if(isset($_SESSION['username'])) {?>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="upload/<?php echo $_SESSION['foto'];?>" alt="<?= $_SESSION['foto']; ?>" height="40" width="40" alt="">
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span><?php echo $_SESSION['nama_user']; ?></span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()"><?php echo $_SESSION['level'] ?></a></li>
                                        <hr class="my-2">
                                         <li><a href="logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            <?php } ?>


            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->