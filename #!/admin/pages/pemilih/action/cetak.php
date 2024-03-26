
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="assets/image/png" sizes="16x16" href="../assets/images/icon-white.png">
	<title>CETAK DATA PEMILIH - SISTEM INFORMASI E-VOTING</title>
</head>
<body>

	<center>

		<h2>DATA PEMILIH</h2>
		<h4>SISTEM INFORMASI E-VOTING</h4>

	</center>

<p align="right">
<?php
$tanggal= mktime(date("m"),date("d"),date("Y"));
echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
date_default_timezone_set('Asia/Jakarta');

$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";
?> 
</p> 

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
            <th>Kode</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Prodi/Jurusan</th>
            <th>Keterangan</th>
            <th>Status</th>
		</tr>

		<?php
        include "../../../../../lib/config.php";
		include "../../../../../lib/koneksi.php";

        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi");

        $no = 1;

        while ($pml=mysqli_fetch_array($SqlQuery)) { ?>
		<tr>
        <td align="center"><?php echo $no++; ?></td>
        <td align="center"><?php echo $pml['kode_pemilih']; ?></td>
        <td align="center"><?php echo $pml['nim']; ?></td>
        <td><?php echo $pml['nama_pemilih']; ?></td>
        <td><?php echo $pml['jenis_kelamin']; ?></td>
        <td><?php echo $pml['nama_prodi']; ?></td>
        <td align="center"><?php echo $pml['keterangan']; ?></td>
        <td align="center"><?php echo $pml['status']; ?></td>
        </tr>
        <?php } ?>
	</table>

    <br>

<div align="center">
    <h4>Ketua Penyelenggara</h4>
    <br>
    <br>
    <br>
    <h4>(_________________)</h4>
</div>

	<script>
		window.print();
	</script>

</body>
</html>