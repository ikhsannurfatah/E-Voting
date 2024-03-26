<?php
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $kode = $_POST['kode'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $idprodi=$_POST['idprodi'];
    $gender = $_POST['gender'];
    $keterangan = $_POST['keterangan'];
    $status = $_POST['status'];
      

// cek nim
if (isset($_POST['nim'])) {
$nim = $_POST['nim'];

 $queryCek = mysqli_query($koneksi, "SELECT nim FROM tbl_pemilih WHERE nim = '$nim'"); 

 if($queryCek->num_rows > 0) { ?>
    <script>
        window.location="<?php echo $admin_url; ?>add_pemilih.php?msg=1";
    </script>
 <?php } else {
                  $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_pemilih (kode_pemilih, nim, password, nama_pemilih, jenis_kelamin, prodi, keterangan, status) VALUES ('$kode','$nim','$password','$nama','$gender','$idprodi','$keterangan','$status')");

                if ($querySimpan) { ?>
                    <script>
                        window.location="<?php echo $admin_url; ?>pemilih.php?add=1";
                    </script>
                <?php } else { ?>
                    <script>
                        window.location="<?php echo $admin_url; ?>add_pemilih.php?ggl=1";
                    </script>
                <?php }    
 }
}
   
?>