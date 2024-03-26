<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $id_tampil=$_GET['id_tampil'];
    $sesi_voting = $_GET['sesi_voting'];

    if ($sesi_voting=="Mulai Voting") {
        $sesi_voting = "Tutup Voting";
        $queryEdit = mysqli_query($koneksi, "UPDATE tbl_tampil SET sesi_voting='$sesi_voting' WHERE id_tampil='$id_tampil'"); 
        if ($queryEdit) { ?>
        <script>
            window.location="<?php echo $admin_url; ?>tampilan.php?offvot=1";
        </script>
       <?php } else { ?>
        <script>
            window.location='$admin_url'+'tampilan.php';
        </script>
       <?php }
    } elseif ($sesi_voting=="Tutup Voting") {
        $sesi_voting = "Mulai Voting";
        $queryEdit = mysqli_query($koneksi, "UPDATE tbl_tampil SET sesi_voting='$sesi_voting' WHERE id_tampil='$id_tampil'"); 
        if ($queryEdit) { ?>
        <script>
            window.location="<?php echo $admin_url; ?>tampilan.php?onvot=1";
        </script>
        <?php } else { ?>
        <script>
            window.location="<?php echo $admin_url; ?>tampilan.php";
        </script>
       <?php }
    }
?>