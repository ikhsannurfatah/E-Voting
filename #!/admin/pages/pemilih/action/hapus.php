<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $kode = $_GET['kode_pemilih'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_pemilih WHERE kode_pemilih='$kode'");
    if ($queryHapus) {
        echo "<script>
        window.location='$admin_url'+'pemilih.php?msg=1';
        </script>";
    } else {
       echo "<script>alert('Data Gagal Dihapus');

       </script>";
    }
  
?>