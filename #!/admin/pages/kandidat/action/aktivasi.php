<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $noUrut = $_GET['no_urut'];
    $status = $_GET['status'];

    if ($status=="Aktif") {
        $status = "Diskualifikasi";
        $queryEdit = mysqli_query($koneksi, "UPDATE tbl_kandidat SET status='$status' WHERE no_urut='$noUrut'"); 
        if ($queryEdit) {
        echo "<script>
        window.location='$admin_url'+'kandidat.php?offknd=1';
        </script>";
    } else {
       echo "<script>
       window.location='$admin_url'+'kandidat.php?ggl=1';
       </script>";
    }
    } elseif ($status=="Diskualifikasi") {
        $status = "Aktif";
        $queryEdit = mysqli_query($koneksi, "UPDATE tbl_kandidat SET status='$status' WHERE no_urut='$noUrut'"); 
        if ($queryEdit) {
        echo "<script>
        window.location='$admin_url'+'kandidat.php?onknd=1';
        </script>";
    } else {
       echo "<script>
       window.location='$admin_url'+'kandidat.php?ggl=1';
       </script>";
    }
    }

?>