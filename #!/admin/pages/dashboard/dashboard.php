<div class="content-body">
                <div class="text-center">
                    <h4 class="card-widget__title text-dark mt-3">Sistem Informasi E-Voting</h4>
                </div>
            
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid mt-3">
                <div class="row">

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

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Pemilih</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $jumlah_pemilih; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Kandidat</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $jumlah_kandidat; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="icon-user"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Pemilih Yang Sudah Memilih</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $jumlah_Svote; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="icon-diamond"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Pemilih Yang Belum Memilih</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $jumlah_Bvote; ?></h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="icon-ghost"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title" align="center">PERESENTASE VOTING</h4>

                                <?php

                                if ($jumlah_Svote == 0 && $jumlah_Bvote == 0) {

                                    $persenA = 0;
                                    $persenB = 0;
                                    
                                } else {

                                    $persenA = $jumlah_Svote/$jumlah_pemilih*100;
                                    $persenB = $jumlah_Bvote/$jumlah_pemilih*100;
                                }


                                ?>



                                <h5 class="mt-3">Pemilih yang sudah melakukan voting <span class="float-right"><?php echo $persenA; ?> %</span></h5>
                                <div class="progress mb-3" style="height: 15px">
                                    <div class="progress-bar bg-success active progress-bar-striped" style="width: <?php echo $persenA; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persenA; ?>% Complete</span>
                                    </div>
                                </div>

                                <h5 class="mt-3">Pemilih yang belum melakukan voting <span class="float-right"><?php echo $persenB; ?>%</span></h5>
                                <div class="progress mb-3" style="height: 15px">
                                    <div class="progress-bar bg-danger active progress-bar-striped" style="width: <?php echo $persenB; ?>%;" role="progressbar"><span class="sr-only"><?php echo $persenB; ?>% Complete</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");

                        while ($knd=mysqli_fetch_array($SqlQuery)) {
                        ?>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img alt="<?= $knd['foto']; ?>" class="rounded-circle mt-4" src="upload/<?php echo $knd['foto'];?>" height="230" width="230">
                                    <h4 class="card-widget__title text-dark mt-3"><?php echo $knd['nama_kandidat']; ?></h4>
                                    <p class="text-muted">No urut : 0<?php echo $knd['no_urut']; ?></p>
                                </div>
                                <div class="stat-widget-one">
                                <div class="stat-content">
                                    <div class="stat-text">Total Suara</div>
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
                                            <div class="stat-digit gradient-3-text"><?php echo "{$result['Jumlah']}"; ?></div>
                                         <?php  } else { ?>
                                            <div class="stat-digit gradient-3-text">0</div>
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
                                            <div class="stat-digit gradient-3-text"><?php echo "{$result['Jumlah']}"; ?></div>
                                         <?php  } else { ?>
                                            <div class="stat-digit gradient-3-text">0</div>
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
                                            <div class="stat-digit gradient-3-text"><?php echo "{$result['Jumlah']}"; ?></div>
                                         <?php  } else { ?>
                                            <div class="stat-digit gradient-3-text">0</div>
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
                                            <div class="stat-digit gradient-3-text"><?php echo "{$result['Jumlah']}"; ?></div>
                                         <?php  } else { ?>
                                            <div class="stat-digit gradient-3-text">0</div>
                                        <?php  }  ?>

                                    <?php } else { ?>

                                    <?php } ?>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>

                </div>
            </div>
        </div>