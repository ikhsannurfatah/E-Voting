<div class="content-body">
                <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Pengaturan</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid mt-3">
                <div class="row">

            <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Sesi Voting</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_tampil");

                        $no = 1;

                        while ($vot=mysqli_fetch_array($SqlQuery)) {
                        ?>
                                <?php if($vot['sesi_voting'] == "Mulai Voting") { ?>
                                                    <a href="<?php echo $admin_url; ?>pages/tampilan/action/tampil_voting.php?id_tampil=<?php echo $vot['id_tampil'];?>&sesi_voting=<?php echo $vot['sesi_voting'];?>" data-toggle="tooltip" data-placement="top" title="Tutup Voting" class="label label-success btn-offvot"><?php echo $vot['sesi_voting']; ?></a>
                                                    </h2>
                                                    </div>
                                                    <span class="float-right display-5 opacity-5"><i class="fa fa-toggle-on"></i></span>
                                <?php } else { ?>
                                                        <a href="<?php echo $admin_url; ?>pages/tampilan/action/tampil_voting.php?id_tampil=<?php echo $vot['id_tampil'];?>&sesi_voting=<?php echo $vot['sesi_voting'];?>" data-toggle="tooltip" data-placement="top" title="Mulai Voting" class="label label-danger btn-onvot"><?php echo $vot['sesi_voting']; ?></a>
                                                        </h2>
                                                        </div>
                                                        <span class="float-right display-5 opacity-5"><i class="fa fa-toggle-off"></i></span>
                                <?php } ?>
                                <?php } ?>
                                        
                                            
                                
                    </div>
                </div>
            </div>

                        <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Quick Count </h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_tampil");

                        $no = 1;

                        while ($vot=mysqli_fetch_array($SqlQuery)) {
                        ?>

                        <?php if($vot['quick_count'] == "Tampilkan") { ?>
                                                    <a href="<?php echo $admin_url; ?>pages/tampilan/action/tampil_quickcount.php?id_tampil=<?php echo $vot['id_tampil'];?>&quick_count=<?php echo $vot['quick_count'];?>" data-toggle="tooltip" data-placement="top" title="Sembunyikan" class="label label-success btn-offcount"><?php echo $vot['quick_count']; ?></a>
                                                    </h2>
                                                    </div>
                                                    <span class="float-right display-5 opacity-5"><i class="fa fa-toggle-on"></i></span>
                                <?php } else { ?>
                                                        <a href="<?php echo $admin_url; ?>pages/tampilan/action/tampil_quickcount.php?id_tampil=<?php echo $vot['id_tampil'];?>&quick_count=<?php echo $vot['quick_count'];?>" data-toggle="tooltip" data-placement="top" title="Tampilkan" class="label label-danger btn-oncount"><?php echo $vot['quick_count']; ?></a>
                                                        </h2>
                                                        </div>
                                                        <span class="float-right display-5 opacity-5"><i class="fa fa-toggle-off"></i></span>
                                <?php } ?>
                                <?php } ?>
                                        
                                            
                                
                    </div>
                </div>
            </div>

        </div>
    </div>


            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">                
                            <div class="card-body">
                                    <h4 class="card-title">Setting Tampilan Halaman Frontend</h4>
                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>ID Tampil</th>
                                                <th>Title</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_tampil");

                        $no = 1;

                        while ($vot=mysqli_fetch_array($SqlQuery)) {
                        ?>
                                            <tr>
                                                <td align="center"><?php echo $no++; ?></td>
                                                <td align="center"><?php echo $vot['id_tampil']; ?></td>
                                                <td align="justify" width="300px"><?php echo $vot['title']; ?></td>
                                                <td align="justify" width="550px"><?php echo $vot['deskripsi']; ?></td>
                                                <td align="center"><span>
                                                <a href="<?php echo $admin_url; ?>edit_tampilan.php?id_tampil=<?php echo $vot['id_tampil']; ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="label label-primary">Edit</a></span>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">                
                            <div class="card-body">
                                <div align="right">
                                    <a href="<?php echo $admin_url; ?>add_prodi.php" class="btn mb-1 btn-primary">Tambah Prodi</a>
                                </div>
                                    <h4 class="card-title">Data Prodi/Jurusan</h4>
                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>ID Prodi</th>
                                                <th>Fakultas</th>
                                                <th>Nama Prodi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_prodi");

                        $no = 1;

                        while ($vot=mysqli_fetch_array($SqlQuery)) {
                        ?>
                                            <tr>
                                                <td align="center"><?php echo $no++; ?></td>
                                                <td align="center"><?php echo $vot['id_prodi']; ?></td>
                                                <td><?php echo $vot['fakultas']; ?></td>
                                                <td><?php echo $vot['nama_prodi']; ?></td>
                                                <td align="center"><span>
                                                <a href="<?php echo $admin_url; ?>edit_prodi.php?id_prodi=<?php echo $vot['id_prodi']; ?>" data-toggle="tooltip" data-placement="top" title="Ubah" class="label label-primary">Ubah</a>
                                                <a href="<?php echo $admin_url; ?>pages/tampilan/action/hapus_prodi.php?id_prodi=<?php echo $vot['id_prodi']; ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="label label-danger btn-del">Hapus</a>
                                                </span>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

<?php if (isset($_GET['msg'])) : ?>
    <div class="flash-datahapus" data-flashdatahapus="<?= $_GET['msg'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['add'])) : ?>
    <div class="flash-datasimpan" data-flashdatasimpan="<?= $_GET['add'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['edt'])) : ?>
    <div class="flash-dataedit" data-flashdataedit="<?= $_GET['edt'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['ggl'])) : ?>
    <div class="flash-datagagal" data-flashdatagagal="<?= $_GET['ggl'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['onvot'])) : ?>
    <div class="flash-dataonvot" data-flashdataonvot="<?= $_GET['onvot'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['offvot'])) : ?>
    <div class="flash-dataoffvot" data-flashdataoffvot="<?= $_GET['offvot'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['oncount'])) : ?>
    <div class="flash-dataoncount" data-flashdataoncount="<?= $_GET['oncount'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['offcount'])) : ?>
    <div class="flash-dataoffcount" data-flashdataoffcount="<?= $_GET['offcount'] ?>"></div>
<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
