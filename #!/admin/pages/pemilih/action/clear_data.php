<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_pemilih");
    if ($queryHapus) {
        echo "<script>
        window.location='$admin_url'+'pemilih.php?wipe=1';
        </script>";
    } else {
       echo "<script>
       window.location='$admin_url'+'pemilih.php?ggl=1';
       </script>";
    }
  
?>