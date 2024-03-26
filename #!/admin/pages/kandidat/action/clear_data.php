<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kandidat");
    if ($queryHapus) {
        echo "<script>
        window.location='$admin_url'+'kandidat.php?wipe=1';
        </script>";
    } else {
       echo "<script>a
       window.location='$admin_url'+'kandidat.php?ggl=1';
       </script>";
    }
  
?>