<?php
include "lib/koneksi.php";

session_start();

error_reporting(0);

  $sqlTamp=mysqli_query($koneksi,"SELECT * FROM tbl_tampil");
  $hasilTamp=mysqli_fetch_array($sqlTamp);
  $title=$hasilTamp['title'];
  $deskripsi=$hasilTamp['deskripsi'];
  $sesi_voting=$hasilTamp['sesi_voting'];
  $quick_count=$hasilTamp['quick_count'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Informasi E-Voting</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ikhsan Nur Fatah">
	
	  <!-- All CSS Files -->
    <link rel="shortcut icon" href="assets/image/logo/icon-white.png" type="image/png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.lineProgressbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link id="colors" rel="stylesheet" href="assets/css/colors/defaults-color.css">

    <style>
      .swal2-popup {
        font-size: 1.6rem !important;
      }
    </style>


</head>
<body>
     <!-- ==== Preloader start ==== -->
   <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
   </div>
   <!-- ==== Preloader end ==== -->
        <!-- Header start -->
    <header>
      <div class="hidden-xs hidden-sm nav-top primary-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="nav-top-access">
                <!-- Social links -->
                <ul>
<script type="text/javascript">        
    function tampilkanwaktu(){            
    var waktu = new Date();             
    var sh = waktu.getHours() + "";    
    var sm = waktu.getMinutes() + "";    
    var ss = waktu.getSeconds() + "";  
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>

<li><i class="fa fa-calendar"></i>
<?php echo " : "; ?>
<?php
$hari = date('l');
if ($hari=="Sunday") {
 echo "Minggu, ";
}elseif ($hari=="Monday") {
 echo "Senin, ";
}elseif ($hari=="Tuesday") {
 echo "Selasa, ";
}elseif ($hari=="Wednesday") {
 echo "Rabu, ";
}elseif ($hari=="Thursday") {
 echo("Kamis, ");
}elseif ($hari=="Friday") {
 echo "Jum'at, ";
}elseif ($hari=="Saturday") {
 echo "Sabtu, ";
}
?>

<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
 echo " Januari ";
}elseif ($bulan=="February") {
 echo " Februari ";
}elseif ($bulan=="March") {
 echo " Maret ";
}elseif ($bulan=="April") {
 echo " April ";
}elseif ($bulan=="May") {
 echo " Mei ";
}elseif ($bulan=="June") {
 echo " Juni ";
}elseif ($bulan=="July") {
 echo " Juli ";
}elseif ($bulan=="August") {
 echo " Agustus ";
}elseif ($bulan=="September") {
 echo " September ";
}elseif ($bulan=="October") {
 echo " Oktober ";
}elseif ($bulan=="November") {
 echo " November ";
}elseif ($bulan=="December") {
 echo " Desember ";
}
$tahun=date('Y');
echo $tahun;
?>

 | </li>
                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">    
<?php echo " : ";?> <span id="clock"></span> </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
