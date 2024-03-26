<?php 
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $kode = $_POST['kode_pemilih'];
    $nim = $_POST['nim'];
    $password = md5($_POST['password']);
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $idprodi=$_POST['idprodi'];
    $keterangan = $_POST['keterangan'];
    $status = $_POST['status'];

    $queryEdit = mysqli_query($koneksi, "UPDATE tbl_pemilih SET nim='$nim', password='$password', nama_pemilih='$nama', jenis_kelamin='$gender', prodi='$idprodi', keterangan='$keterangan', status='$status' WHERE kode_pemilih='$kode'");

      if ($queryEdit) { ?>
        <script>
        window.location="<?php echo $admin_url; ?>pemilih.php?edt=1";
        </script>
    <?php } else { ?>
       <script>
       window.location="<?php echo $admin_url; ?>pemilih.php?ggl=1";
       </script>
    <?php }

?>