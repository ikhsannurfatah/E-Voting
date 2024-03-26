<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $noUrut = $_GET['no_urut'];
    
    $queryCek = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat WHERE no_urut='$noUrut'");

    $data = mysqli_fetch_array($queryCek);

    $foto= $data['foto'];

    if (file_exists("../../../upload/$foto")) {
        unlink("../../../upload/$foto");
    }

    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kandidat WHERE no_urut='$noUrut'");

    if ($queryHapus) {
        echo "<script>
        window.location='$admin_url'+'kandidat.php?msg=1';
        </script>";
    } else {
       echo "<script>
       window.location='$admin_url'+'kandidat.php?del=1';
       </script>";
    }
  
?>