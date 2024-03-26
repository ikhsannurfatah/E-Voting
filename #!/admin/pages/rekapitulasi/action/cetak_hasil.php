
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/icon-white.png">
	<title>CETAK DATA REKAPITULASI HASIL VOTING - SISTEM INFORMASI E-VOTING</title>
</head>
<body>

	<center>
		<h2>DATA REKAPIITULASI HASIL VOTING</h2>
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



<?php     

        include "../../../../../lib/config.php";
        include "../../../../../lib/koneksi.php";

$data_pemilih = mysqli_query($koneksi, "SELECT * FROM tbl_pemilih");
$jumlah_pemilih = mysqli_num_rows($data_pemilih);

$data_Svote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
$jumlah_Svote = mysqli_num_rows($data_Svote);

$data_kandidat = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");
$jumlah_kandidat = mysqli_num_rows($data_kandidat);

$jumlah_Bvote = $jumlah_pemilih - $jumlah_Svote;

?>

                                    <div>
                                        <div>
                                        <table border="1" style="width: 100%;">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Kandidat</th>
                                                <th>Perolehan Suara</th>
                                                <th>Persentase</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                        <?php

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");

                        while ($knd=mysqli_fetch_array($SqlQuery)) {
                        ?>

                                <?php
                                    if ($knd['no_urut'] == "1") { ?>
                                        <?php
                                        $QueryVote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
                                        while ($vot=mysqli_fetch_array($QueryVote)) {
                                        $id = $vot['kandidat_dipilih'];
                                        $data_vote = mysqli_query($koneksi, "SELECT kandidat_dipilih, COUNT(kandidat_dipilih) AS Jumlah FROM tbl_vote WHERE kandidat_dipilih = 1");
                                        $result= mysqli_fetch_array($data_vote);
                                        } ?>

                                        <?php if (isset($result['Jumlah'])) { ?>
                                            <?php
                                            $jumlah1 = $result['Jumlah'];
                                            $persentase = $jumlah1/$jumlah_pemilih*100;
                                            ?>

                                            <tr align="center">
                                                <td width="50px"><?php echo $knd['no_urut']; ?></td>
                                                <td width="500px">0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td width="300px"><?php echo $jumlah1; ?></td>
                                                <td width="300px">
                                                    <div class="progress" style="height: 9px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                         <?php  } else { ?>
                                            <?php
                                            $jumlah1 = 0;
                                            $persentase = $jumlah1/$jumlah_pemilih*100;
                                            ?>

                                            <tr align="center">
                                                <td width="50px"><?php echo $knd['no_urut']; ?></td>
                                                <td width="500px">0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td width="300px"><?php echo $jumlah1; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 9px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php  }  ?>

                                    
                                        
                                    <?php } elseif ($knd['no_urut'] == "2") { ?>
                                        <?php
                                        $QueryVote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
                                        while ($vot=mysqli_fetch_array($QueryVote)) {
                                        $id = $vot['kandidat_dipilih'];
                                        $data_vote = mysqli_query($koneksi, "SELECT kandidat_dipilih, COUNT(kandidat_dipilih) AS Jumlah FROM tbl_vote WHERE kandidat_dipilih = 2");
                                        $result= mysqli_fetch_array($data_vote);
                                        } ?>

                                        <?php if (isset($result['Jumlah'])) { ?>
                                            <?php
                                            $jumlah2 = $result['Jumlah'];
                                            $persentase = $jumlah2/$jumlah_pemilih*100;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 9px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                         <?php  } else { ?>
                                             <?php
                                            $jumlah2 = 0;
                                            $persentase = $jumlah2/$jumlah_pemilih*100;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 9px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php  }  ?>

                                    <?php } elseif ($knd['no_urut'] == "3") { ?>
                                        <?php
                                        $QueryVote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
                                        while ($vot=mysqli_fetch_array($QueryVote)) {
                                        $id = $vot['kandidat_dipilih'];
                                        $data_vote = mysqli_query($koneksi, "SELECT kandidat_dipilih, COUNT(kandidat_dipilih) AS Jumlah FROM tbl_vote WHERE kandidat_dipilih = 3");
                                        $result= mysqli_fetch_array($data_vote);
                                        } ?>

                                        <?php if (isset($result['Jumlah'])) { ?>
                                            <?php
                                            $jumlah2 = $result['Jumlah'];
                                            $persentase = $jumlah2/$jumlah_pemilih*100;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 9px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                         <?php  } else { ?>
                                             <?php
                                            $jumlah2 = 0;
                                            $persentase = $jumlah2/$jumlah_pemilih*100;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 9px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php  }  ?>

                                    <?php } elseif ($knd['no_urut'] == "4") { ?>
                                        <?php
                                        $QueryVote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
                                        while ($vot=mysqli_fetch_array($QueryVote)) {
                                        $id = $vot['kandidat_dipilih'];
                                        $data_vote = mysqli_query($koneksi, "SELECT kandidat_dipilih, COUNT(kandidat_dipilih) AS Jumlah FROM tbl_vote WHERE kandidat_dipilih = 4");
                                        $result= mysqli_fetch_array($data_vote);
                                        } ?>

                                        <?php if (isset($result['Jumlah'])) { ?>
                                            <?php
                                            $jumlah2 = $result['Jumlah'];
                                            $persentase = $jumlah2/$jumlah_pemilih*100;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 9px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                         <?php  } else { ?>
                                             <?php
                                            $jumlah2 = 0;
                                            $persentase = $jumlah2/$jumlah_pemilih*100;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 9px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php  }  ?>
                                        
                                    <?php } else { ?>

                                    <?php } ?>

                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                                
                                <div align="right">
                                        <h5> Pemilih Yang Sudah Memilih : <?php echo $jumlah_Svote; ?></h5>
                                        <h5> Pemilih Yang Belum Memilih : <?php echo $jumlah_Bvote; ?></h5>
                                        <h5> Jumlah Pemilih : <?php echo $jumlah_pemilih; ?></h5>

                                        <hr>

                                        <h5> Jumlah Voting Berhasil : <?php echo $jumlah_Svote; ?></h5>
                                        <h5> Jumlah Voting Gugur : <?php echo $jumlah_Bvote; ?></h5>
                                </div>
                                <hr>

                                        
                            </div>

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