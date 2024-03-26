<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $id_tampil=$_GET['id_tampil'];
    $quick_count = $_GET['quick_count'];

    if ($quick_count=="Tampilkan") {
        $quick_count = "Sembunyikan";
        $queryEdit = mysqli_query($koneksi, "UPDATE tbl_tampil SET quick_count='$quick_count' WHERE id_tampil='$id_tampil'"); 
        if ($queryEdit) { ?>
        <script>
            window.location="<?php echo $admin_url; ?>tampilan.php?offcount=1";
        </script>
       <?php } else { ?>
        <script>
            window.location='$admin_url'+'tampilan.php';
        </script>
       <?php }
    } elseif ($quick_count=="Sembunyikan") {
        $quick_count = "Tampilkan";
        $queryEdit = mysqli_query($koneksi, "UPDATE tbl_tampil SET quick_count='$quick_count' WHERE id_tampil='$id_tampil'"); 
        if ($queryEdit) { ?>
        <script>
            window.location="<?php echo $admin_url; ?>tampilan.php?oncount=1";
        </script>
        <?php } else { ?>
        <script>
            window.location="<?php echo $admin_url; ?>tampilan.php";
        </script>
       <?php }
    }
?>