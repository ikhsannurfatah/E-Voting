<div class="content-body">
                <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pemilih</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <?php     

include "../../lib/config.php";
include "../../lib/koneksi.php";

$data_pemilih = mysqli_query($koneksi, "SELECT * FROM tbl_pemilih");
$jumlah_pemilih = mysqli_num_rows($data_pemilih);

$data_Svote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
$jumlah_Svote = mysqli_num_rows($data_Svote);

$data_kandidat = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");
$jumlah_kandidat = mysqli_num_rows($data_kandidat);

$jumlah_Bvote = $jumlah_pemilih - $jumlah_Svote;

?>



            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" align="center">Data Rekapitulasi Voting</h4>
                                <div align="right">
                                    <a href="<?php echo $admin_url; ?>pages/rekapitulasi/action/cetak_hasil.php" class=" btn btn-primary"><i class="fa fa-print"></i>  Cetak Hasil Rekap</a>
                                </div>
                                <br>

                                    <div>
                                        <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Kandidat</th>
                                                <th>Perolehan Suara</th>
                                                <th>Grafik</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

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
                                                <td>
                                                    <div class="progress" style="height: 13px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                         <?php  } else { ?>
                                            <?php
                                            $jumlah1 = 0;
                                            $persentase = 0;
                                            ?>

                                            <tr align="center">
                                                <td width="50px"><?php echo $knd['no_urut']; ?></td>
                                                <td width="500px">0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td width="300px"><?php echo $jumlah1; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 13px">
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
                                                    <div class="progress" style="height: 13px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                         <?php  } else { ?>
                                             <?php
                                            $jumlah2 = 0;
                                            $persentase = 0;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 13px">
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
                                                    <div class="progress" style="height: 13px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                         <?php  } else { ?>
                                             <?php
                                            $jumlah2 = 0;
                                            $persentase = 0;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 13px">
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
                                                    <div class="progress" style="height: 13px">
                                                    <div class="progress-bar bg-success" style="width: <?php echo $persentase; ?>%;" role="progressbar"><?php echo $persentase; ?>%</div>
                                                    </div>
                                                </td>
                                            </tr>

                                         <?php  } else { ?>
                                             <?php
                                            $jumlah2 = 0;
                                            $persentase = 0;
                                            ?>

                                            <tr align="center">
                                                <td><?php echo $knd['no_urut']; ?></td>
                                                <td>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></td>
                                                <td><?php echo $jumlah2; ?></td>
                                                <td>
                                                    <div class="progress" style="height: 13px">
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

                                <hr>
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
               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>