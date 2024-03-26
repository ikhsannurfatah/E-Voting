
<!DOCTYPE html>
<html>
<head>

	<title>CETAK DATA KANDIDAT - SISTEM INFORMASI E-VOTING</title>

	<link rel="icon" type="assets/image/png" sizes="16x16" href="assets/images/icon-white.png">
	
</head>
<body>

	<center>

		<h2>DATA KANDIDAT</h2>
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
		<tr align="center">
            <th></th>
            <th>Biografi Kandidat</th>
		</tr>

		<?php
        include "../../../../../lib/config.php";
		include "../../../../../lib/koneksi.php";

        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");

        while ($knd=mysqli_fetch_array($SqlQuery)) { ?>
		<tr>
		<td align="center" width="220px"><img src="../../../upload/<?php echo $knd['foto'];?>" alt="<?= $knd['foto']; ?>" height="230" width="220"></td>
        <td align="justify" width="600px">
        	<h5>
                No Urut : 0<?php echo $knd['no_urut']; ?>
                <br>
                Nama : <?php echo $knd['nama_kandidat']; ?>
            </h5>
                <?php echo $knd['tentang']; ?>
            <h6>
            	Keterangan : <?php echo $knd['status']; ?>
            </h6>
        </td>
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