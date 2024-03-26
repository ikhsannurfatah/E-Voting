<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";
    
    $keterangan = "Belum Voting";

    $queryEdit = mysqli_query($koneksi, "UPDATE tbl_pemilih SET keterangan='$keterangan'");
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_vote");
    if ($queryHapus && $queryEdit) {
        echo "<script>
        window.location='$admin_url'+'voting.php?wipe=1';
        </script>";
    } else {
       echo "<script>
       window.location='$admin_url'+'voting.php';
       </script>";
    }
  
?>