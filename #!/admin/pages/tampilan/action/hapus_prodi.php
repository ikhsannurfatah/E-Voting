<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $idprodi = $_GET['id_prodi'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_prodi WHERE id_prodi='$idprodi'");
    if ($queryHapus) {
        echo "
        <script>
        window.location='$admin_url'+'tampilan.php?msg=1';
        </script>";
    } else {
       echo "<script>alert('Data Gagal Dihapus');
       </script>";
    }
  
?>