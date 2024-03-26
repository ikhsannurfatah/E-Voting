<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";


    $nomor = $_GET['no'];
    
    $queryCek = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE no='$nomor'");

    $data = mysqli_fetch_array($queryCek);

    $foto= $data['foto'];

    if (file_exists("../../../upload/$foto")) {
        unlink("../../../upload/$foto");
    }

    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_user WHERE no='$nomor'");

    if ($queryHapus) {
        echo "<script>
        window.location='$admin_url'+'user.php?msg=1';
        </script>";
    } else {
       echo "<script>
       window.location='$admin_url'+'user.php?ggl=1';
       </script>";
    }
  
?>