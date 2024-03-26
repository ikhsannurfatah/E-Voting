<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

$id_tampil=$_POST['id_tampil']; 
$title=$_POST['title'];  
$deskripsi=$_POST['deskripsi'];
$sesi_voting=$_POST['sesi_voting'];
$quick_count=$_POST['quick_count'];


    $queryEdit = mysqli_query($koneksi, "UPDATE tbl_tampil SET title='$title', deskripsi='$deskripsi', sesi_voting='$sesi_voting', quick_count='$quick_count' WHERE id_tampil='$id_tampil'");

      if ($queryEdit) { ?>
        <script>
            window.location="<?php echo $admin_url; ?>tampilan.php?edt=1";
        </script>
   <?php } else { ?>
       <script>
            window.location="<?php echo $admin_url; ?>tampilan.php?ggl=1";
       </script>";
    <?php 
  }

?>