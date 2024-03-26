<?php 
include "lib/config.php";
include "lib/koneksi.php";

$no_urut = $_GET['no_urut'];
$kode_pemilih = $_GET['kode_pemilih'];
$kandidat_dipilih = $_GET['no_urut'];

//tanggal dan waktu
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");

//ID otomatis
$query = "SELECT max(id_vote) as maxVote FROM tbl_vote";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$kodeVote = $data['maxVote'];

$idVote = (int) substr($kodeVote, 3, 3);
$idVote++;

$char = "VOT";
$newID = $char . sprintf("%03s", $idVote);

//cek keterangan
$keterangan = "Sudah Voting";

//Simpan
$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_vote (id_vote, waktu_vote, no_urut, kandidat_dipilih) VALUES ('$newID','$tanggal','$no_urut','$kandidat_dipilih')");

$queryEdit = mysqli_query($koneksi, "UPDATE tbl_pemilih SET keterangan='$keterangan' WHERE kode_pemilih='$kode_pemilih'");

    if ($querySimpan && $queryEdit) {
      	session_start();
		$_SESSION = [];
		session_unset();
		session_destroy();
      ?>
<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
<script>
        Swal.fire({
            icon: 'success',
            title: 'Voting Berhasil!',
            text: 'Anda berhasil melakukan voting!'
        }).then((result) => {
            window.location= 'notif_thanks.php';
        })
</script>
    <?php } else {
       echo "<script>
       window.location='$base_url'+'index.php?votggl=1';</script>";
    }

?>