<!-- == Color schemes == -->
        <div class="color-schemes">
             <div class="color-handle">
                 <i class="fa fa-cogs fa-spin" aria-hidden="true"></i>
             </div>
             <div class="color-plate">
                <h5>Chose color</h5>
                <a href="assets/css/colors/defaults-color.css" class="single-color defaults-color">Defaults</a>
               <a href="assets/css/colors/red-color.css" class="single-color red-color">Red</a>
               <a href="assets/css/colors/purple-color.css" class="single-color purple-color">Purple</a>
               <a href="assets/css/colors/sky-color.css" class="single-color sky-color">sky</a>
               <a href="assets/css/colors/green-color.css" class="single-color green-color">Green</a>
               <a href="assets/css/colors/blue-color.css" class="single-color pink-color">Pink</a>
              </div>
          </div>
<!-- == /Color schemes == -->


<script>
    function harusAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
          return false;
        return true;
      }
</script>

<!--<button class="btn btn-default btn-style hvr-shutter-out-vertical" type="submit" onclick="Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})">Test</button>-->


    <section class="section-padding">
       <div class="container">
         <div class="row">
             <div class="col-md-7">
                <div class="error-page-content">
                  <h3>Silahkan masukkan NIM anda untuk melakukan voting.</h3>
                   <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" maxlength="10" placeholder="NIM" name="nim" onkeypress="return harusAngka(event)">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div align="right">
                            <button class="btn btn-default btn-style hvr-shutter-out-vertical" type="submit" name="submit">Masuk</button>
                            <!--<input type="submit" name="submit" class="btn btn-default btn-style hvr-shutter-out-vertical" value="Masuk">-->
                        </div>
                    </form>
                    <br>
                    <br>
                    <p>Note : Sebelum melakukan voting, pastikan akun anda sudah di aktivasi oleh panitia atau admin.</p>
                </div>
             </div>
             <div class="col-md-5">
                <img src="assets/image/user/login.png" class="img-responsive" alt="">
             </div>
         </div>
       </div>
    </section>

<?php 

include "lib/koneksi.php";
include "lib/config.php";

$nim = $_POST['nim'];
$password = md5($_POST['password']);

if (isset($_POST['submit'])) {
        
$sql = "SELECT * FROM tbl_pemilih WHERE nim='$nim' AND password='$password'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);

if ($row > 0) {
session_start();
    $_SESSION['kode_pemilih'] = $data['kode_pemilih'];
    $_SESSION['nama_pemilih'] = $data['nama_pemilih'];
    $_SESSION['keterangan'] = $data['keterangan'];
    $_SESSION['status'] = $data['status'];

    if ($_SESSION['status'] == "Aktif") { ?>

<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
<script>
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil',
            text: 'Anda berhasil masuk, Silahkan gunakan hak pilih anda'
        }).then((result) => {
            window.location= 'voting.php';
        })
</script>

<?php
    } else {
session_start();
$_SESSION = [];
?>
<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
<script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: 'Akun anda terblokir untuk sementara atau sedang tidak aktif, harap hubungi admin atau datang ke TPS untuk proses aktivasi'
        }).then((result) => {
            window.location= 'login.php';
        })
</script>

<?php

session_destroy();

    }

} else {
?>

<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
<script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: 'NIM yang anda masukkan salah, silahkan masukkan NIM yang benar'
        })
</script>
    
<?php
}

}
?>