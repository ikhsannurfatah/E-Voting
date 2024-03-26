<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $kode = $_GET['kode_pemilih'];
    $status = $_GET['status'];

    if ($status=="Aktif") {
        $status = "Tidak Aktif";
        $queryEdit = mysqli_query($koneksi, "UPDATE tbl_pemilih SET status='$status' WHERE kode_pemilih='$kode'"); 
        if ($queryEdit) {
        echo "<script>
        window.location='$admin_url'+'pemilih.php?offpem=1';
        </script>";
    } else {
       echo "<script>
       window.location='$admin_url'+'pemilih.php?ggl=1';
       </script>";
    }
    } elseif ($status=="Tidak Aktif") {
        $status = "Aktif";
        $queryEdit = mysqli_query($koneksi, "UPDATE tbl_pemilih SET status='$status' WHERE kode_pemilih='$kode'"); 
        if ($queryEdit) {
        echo "<script>
        window.location='$admin_url'+'pemilih.php?onpem=1';
        </script>";
    } else {
       echo "<script>
       window.location='$admin_url'+'pemilih.php?ggl=1';
       </script>";
    }
    }

?>