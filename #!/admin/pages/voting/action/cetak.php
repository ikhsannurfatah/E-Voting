
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon-white.png">
	<title>CETAK DATA VOTING - SISTEM INFORMASI E-VOTING</title>
</head>
<body>

	<center>

		<h2>DATA VOTING</h2>
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
			<th width="1%">No</th>
            <th>ID Vote</th>
          	<th>Waktu Voting</th>
      		<th>Kandidat Dipilih</th>
		</tr>

		<?php
        include "../../../../../lib/config.php";
		include "../../../../../lib/koneksi.php";

        $SqlQuery = mysqli_query($koneksi, "SELECT tbl_vote.id_vote,tbl_vote.waktu_vote,tbl_vote.kandidat_dipilih,tbl_vote.no_urut,tbl_kandidat.no_urut,tbl_kandidat.nama_kandidat FROM tbl_kandidat JOIN tbl_vote ON tbl_vote.no_urut=tbl_kandidat.no_urut ORDER BY id_vote");

        $no = 1;

        while ($vot=mysqli_fetch_array($SqlQuery)) { ?>
		<tr>
        <td align="center"><?php echo $no++; ?></td>
        <td align="center"><?php echo $vot['id_vote']; ?></td>
        <td align="center"><?php echo $vot['waktu_vote']; ?></td>
        <td>0<?php echo $vot['kandidat_dipilih']; ?> - <?php echo $vot['nama_kandidat']; ?></td>
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