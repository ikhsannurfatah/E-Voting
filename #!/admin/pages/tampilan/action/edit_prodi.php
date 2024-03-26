<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $idprodi = $_POST['idprodi'];
    $fakultas = $_POST['fakultas'];
    $nama_prodi = $_POST['nama_prodi'];

    $queryEdit = mysqli_query($koneksi, "UPDATE tbl_prodi SET fakultas='$fakultas', nama_prodi='$nama_prodi' WHERE id_prodi='$idprodi'");

      if ($queryEdit) { ?>
            <script>
                window.location="<?php echo $admin_url; ?>tampilan.php?edt=1";
            </script>

    <?php } else { ?>
            <script>
                window.location="<?php echo $admin_url; ?>add_prodi.php?ggl=1";
            </script>
       <?php
    }

?>