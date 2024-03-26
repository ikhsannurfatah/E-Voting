<?php
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $idprodi = $_POST['idprodi'];
    $fakultas = $_POST['fakultas'];
    $nama_prodi = $_POST['nama_prodi'];

// cek prodi
if (isset($_POST['nama_prodi'])) {
$nama_prodi = $_POST['nama_prodi'];

 $queryCek = mysqli_query($koneksi, "SELECT nama_prodi FROM tbl_prodi WHERE nama_prodi = '$nama_prodi'"); 

 if($queryCek->num_rows > 0) { ?>
<script>
    window.location="<?php echo $admin_url; ?>add_prodi.php?msg=1";
</script>

 <?php
  } else {
                  $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_prodi (id_prodi, fakultas, nama_prodi) VALUES ('$idprodi','$fakultas','$nama_prodi')");

                if ($querySimpan) { ?>


                    <script>
                        window.location="<?php echo $admin_url; ?>tampilan.php?add=1";
                    </script>

               <?php } else { ?>
                    <script>
                        window.location="<?php echo $admin_url; ?>add_prodi.php?ggl=1";
                    </script>
        <?php }    
 }
}
   
?>