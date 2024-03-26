<div class="content-body">
                <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kandidat</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
        <?php if($_SESSION['level'] == "Administrator") { ?>
                            <div class="card-body">
                                    <h4 class="card-title">Data Table Kandidat</h4>
                                    <div align="right">
                                        <a href="<?php echo $admin_url; ?>pages/kandidat/action/cetak.php" class=" btn btn-primary"><i class="fa fa-print"></i>  Cetak Data</a>
                                        <a href="<?php echo $admin_url; ?>pages/kandidat/action/clear_data.php" class=" btn btn-danger btn-wipe" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i>  Kosongkan Data</a>
                                    </div>
                                    <br>
               
                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr align="center">
                                                <th></th>
                                                <th>Biografi Kandidat</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");

                        while ($knd=mysqli_fetch_array($SqlQuery)) {
                        ?>
                                            <tr>
                                                <td align="center" width="200px"><img src="upload/<?php echo $knd['foto'];?>" alt="<?= $knd['foto']; ?>" height="230" width="220"></td>
                                                <td align="justify" width="600px">
                                                <h5>
                                                   No Urut : 0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?>
                                                </h5>
                                                     <br> 
                                                    <?php echo $knd['tentang']; ?>
                                                    <br>
                                <?php if ($knd['link'] == "Tidak Ada") { ?>
                                    <h6>Link : <?php echo $knd['link']; ?></h6>
                                <?php } else { ?>
                                    <h6>Link : <a href="<?php echo $knd['link']; ?>"><?php echo $knd['link']; ?></a></h6>
                                <?php } ?>
                                                </td>
                                                

                                <?php if($knd['status'] == "Aktif") { ?>
                                                <td align="center" width="50px">
                                                    <a href="<?php echo $admin_url; ?>pages/kandidat/action/aktivasi.php?no_urut=<?php echo $knd['no_urut'];?>&status=<?php echo $knd['status'];?>" data-toggle="tooltip" data-placement="top" title="Diskulifikasi" class="label label-success btn-offknd"><?php echo $knd['status']; ?></a>
                                                </td>
                                <?php } else { ?>
                                                  <td align="center" width="50px">
                                                        <a href="<?php echo $admin_url; ?>pages/kandidat/action/aktivasi.php?no_urut=<?php echo $knd['no_urut'];?>&status=<?php echo $knd['status'];?>" data-toggle="tooltip" data-placement="top" title="Aktivasi" class="label label-danger btn-onknd"><?php echo $knd['status']; ?></a>
                                                </td>
                                 <?php } ?>
                                                <td align="center" width="200px"><span>
                                                <a href="<?php echo $admin_url; ?>edit_kandidat.php?no_urut=<?php echo $knd['no_urut']; ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="label label-primary">Ubah</a>

                                                <a href="<?php echo $admin_url; ?>pages/kandidat/action/hapus.php?no_urut=<?php echo $knd['no_urut']; ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="label label-danger btn-del">Hapus</a></span>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
<?php if (isset($_GET['add'])) : ?>
    <div class="flash-datasimpan" data-flashdatasimpan="<?= $_GET['add'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['edt'])) : ?>
    <div class="flash-dataedit" data-flashdataedit="<?= $_GET['edt'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['ggl'])) : ?>
    <div class="flash-datagagal" data-flashdatagagal="<?= $_GET['ggl'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['msg'])) : ?>
    <div class="flash-datahapus" data-flashdatahapus="<?= $_GET['msg'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['del'])) : ?>
    <div class="flash-dataerrordel" data-flashdataerrordel="<?= $_GET['del'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['onknd'])) : ?>
    <div class="flash-dataonknd" data-flashdataonknd="<?= $_GET['onknd'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['offknd'])) : ?>
    <div class="flash-dataoffknd" data-flashdataoffknd="<?= $_GET['offknd'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['imger'])) : ?>
    <div class="flash-dataimgerror" data-flashdataimgerror="<?= $_GET['imger'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['bigimg'])) : ?>
    <div class="flash-databigimg" data-flashdatabigimg="<?= $_GET['bigimg'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['typimg'])) : ?>
    <div class="flash-datatypeimg" data-flashdatatypeimg="<?= $_GET['typimg'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['wipe'])) : ?>
    <div class="flash-datawipe" data-flashdatawipe="<?= $_GET['wipe'] ?>"></div>
<?php endif; ?>

<?php } else { ?>
                                <div class="card-body">
                                    <h4 class="card-title">Data Table Kandidat</h4>
                                    <div align="right">
                                        <a href="<?php echo $admin_url; ?>pages/kandidat/action/cetak.php" class=" btn btn-primary"><i class="fa fa-print"></i>  Cetak Data</a>
                                       
                                    </div>
                                    <br>
               
                                <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr align="center">
                                                <th></th>
                                                <th>Biografi Kandidat</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                         <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");

                        while ($knd=mysqli_fetch_array($SqlQuery)) {
                        ?>
                                            <tr>
                                                <td align="center" width="200px"><img src="upload/<?php echo $knd['foto'];?>" alt="<?= $knd['foto']; ?>" height="230" width="220"></td>
                                                <td align="justify" width="600px">
                                                <h5>
                                                   No Urut : 0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?>
                                                </h5>
                                                     <br> 
                                                    <?php echo $knd['tentang']; ?>
                                                    <br>
                                <?php if ($knd['link'] == "Tidak Ada") { ?>
                                    <h6>Link : <?php echo $knd['link']; ?></h6>
                                <?php } else { ?>
                                    <h6>Link : <a href="<?php echo $knd['link']; ?>"><?php echo $knd['link']; ?></a></h6>
                                <?php } ?>
                                                </td>
                                                

                                <?php if($knd['status'] == "Aktif") { ?>
                                                <td align="center" width="50px">
                                                    <a href="<?php echo $admin_url; ?>pages/kandidat/action/aktivasi.php?no_urut=<?php echo $knd['no_urut'];?>&status=<?php echo $knd['status'];?>" data-toggle="tooltip" data-placement="top" title="Diskulifikasi" class="label label-success btn-offknd"><?php echo $knd['status']; ?></a>
                                                </td>
                                <?php } else { ?>
                                                  <td align="center" width="50px">
                                                        <a href="<?php echo $admin_url; ?>pages/kandidat/action/aktivasi.php?no_urut=<?php echo $knd['no_urut'];?>&status=<?php echo $knd['status'];?>" data-toggle="tooltip" data-placement="top" title="Aktivasi" class="label label-danger btn-onknd"><?php echo $knd['status']; ?></a>
                                                </td>
                                 <?php } ?>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

<?php if (isset($_GET['onknd'])) : ?>
    <div class="flash-dataonknd" data-flashdataonknd="<?= $_GET['onknd'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['offknd'])) : ?>
    <div class="flash-dataoffknd" data-flashdataoffknd="<?= $_GET['offknd'] ?>"></div>
<?php endif; ?>

    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>