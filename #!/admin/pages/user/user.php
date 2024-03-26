<div class="content-body">
                <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data User</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div align="right">
                                    <a href="add_user.php" class="btn mb-1 btn-primary">Tambah User</a>
                                </div>
                                <h4 class="card-title">Data Table User</h4>
                                <br>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Level</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";
                        $kueriUser = mysqli_query($koneksi, "SELECT * FROM tbl_user");
                        while ($usr=mysqli_fetch_array($kueriUser)) {
                        ?>
                                            <tr>
                                                <td align="center"><?php echo $usr['no']; ?></td>
                                                <td><?php echo $usr['nama_user']; ?></td>
                                                <td><?php echo $usr['username']; ?></td>
                                                <td><?php echo $usr['password']; ?></td>
                                                <td align="center"><?php echo $usr['level']; ?></td>
                                                <td align="center"><img src="upload/<?php echo $usr['foto'];?>" alt="<?= $usr['foto']; ?>" height="230" width="220"></td>
                                                <td align="center">
                                                    <span>
                                                        <a href="<?php echo $admin_url; ?>edit_user.php?no=<?php echo $usr['no']; ?>" class="label label-primary" data-toggle="tooltip" data-placement="top" title="Edit">Ubah</a>
                                                        <a href="<?php echo $admin_url; ?>pages/user/action/hapus.php?no=<?php echo $usr['no']; ?>" class="label label-danger btn-del" data-toggle="tooltip" data-placement="top" title="Hapus">Hapus</a>
                                                    </span>
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

<?php if (isset($_GET['imger'])) : ?>
    <div class="flash-dataimgerror" data-flashdataimgerror="<?= $_GET['imger'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['bigimg'])) : ?>
    <div class="flash-databigimg" data-flashdatabigimg="<?= $_GET['bigimg'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['typimg'])) : ?>
    <div class="flash-datatypeimg" data-flashdatatypeimg="<?= $_GET['typimg'] ?>"></div>
<?php endif; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>