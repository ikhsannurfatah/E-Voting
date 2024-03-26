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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
<?php if($_SESSION['level'] == "Administrator") { ?>
                                    <div class="card-body">
                                    <h4 class="card-title" align="center">Data Table Pemilih</h4>
                                    <div align="right">
                                        <a href="import_pemilih.php" class=" btn btn-success"><i class="fa fa-address-book"></i>  Import Data</a>
                                        <a href="<?php echo $admin_url; ?>pages/pemilih/action/cetak.php" class=" btn btn-primary"><i class="fa fa-print"></i>  Cetak Data</a>
                                        <a href="<?php echo $admin_url; ?>pages/pemilih/action/clear_data.php" class=" btn btn-danger btn-wipe" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash"></i>  Kosongkan Data</a>
                                    </div>
                                    <br>
<script>
    function harusAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
          return false;
        return true;
      }
</script>

<div class="col-lg-12">
<form action="pemilih.php" method="get">
    <label>Pencarian NIM :</label>
    <input type="text" class="form-control" name="cari" placeholder="Input NIM" onkeypress="return harusAngka(event)">
    <br>
    <div align="right">
    <input class="btn btn-primary" type="submit" value="cari">
    <a href="pemilih.php" class=" btn btn-danger">reset</a>
    </div>
</form>
</div>

<br>

<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>NIM</th>
                                                <th>Password</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Prodi/Jurusan</th>
                                                <th>Keterangan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";


    if(isset($_GET['cari'])){

        $cari = $_GET['cari'];
        $data_pemilih = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi WHERE nim like '%".$cari."%'");

    }else{
       

                        $batas = 15;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;    
 
                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $SqlQuery = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi");

                        $jumlah_data = mysqli_num_rows($SqlQuery);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $data_pemilih = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi limit $halaman_awal, $batas");

                        $no = $halaman_awal+1;
            }
                        $batas = 15;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        
                        $SqlQuery = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi");
                        $jumlah_data = mysqli_num_rows($SqlQuery);
                        $total_halaman = ceil($jumlah_data / $batas);


                        $no = $halaman_awal+1;

                        while ($pml=mysqli_fetch_array($data_pemilih)) {
                        ?>

                                            <tr>
                                                <td align="center"><?php echo $no++; ?></td>
                                                <td align="center"><?php echo $pml['kode_pemilih']; ?></td>
                                                <td align="center"><?php echo $pml['nim']; ?></td>
                                                <td><?php echo $pml['password']; ?></td>
                                                <td><?php echo $pml['nama_pemilih']; ?></td>
                                                <td><?php echo $pml['jenis_kelamin']; ?></td>
                                                <td><?php echo $pml['nama_prodi']; ?></td>
                                                <td align="center"><?php echo $pml['keterangan']; ?></td>
                                <?php if($pml['status'] == "Aktif") { ?>
                                                <td align="center">
                                                    <a href="<?php echo $admin_url; ?>pages/pemilih/action/aktivasi.php?kode_pemilih=<?php echo $pml['kode_pemilih'];?>&status=<?php echo $pml['status'];?>" data-toggle="tooltip" data-placement="top" title="Disable" class="label label-success btn-offpem"><?php echo $pml['status']; ?></a>
                                                </td>
                                <?php } else { ?>
                                                  <td align="center">
                                                        <a href="<?php echo $admin_url; ?>pages/pemilih/action/aktivasi.php?kode_pemilih=<?php echo $pml['kode_pemilih'];?>&status=<?php echo $pml['status'];?>" data-toggle="tooltip" data-placement="top" title="Aktivasi" class="label label-warning btn-onpem"><?php echo $pml['status']; ?></a>
                                                </td>
                                 <?php } ?>

                                                <td align="center"><span>
                                                <a href="<?php echo $admin_url; ?>edit_pemilih.php?kode_pemilih=<?php echo $pml['kode_pemilih']; ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="label label-primary">Ubah</a>

                                                <a href="<?php echo $admin_url; ?>pages/pemilih/action/hapus.php?kode_pemilih=<?php echo $pml['kode_pemilih']; ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="label label-danger btn-del">Hapus</a></span>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
        </nav>

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

<?php if (isset($_GET['onpem'])) : ?>
    <div class="flash-dataonpem" data-flashdataonpem="<?= $_GET['onpem'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['offpem'])) : ?>
    <div class="flash-dataoffpem" data-flashdataoffpem="<?= $_GET['offpem'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['wipe'])) : ?>
    <div class="flash-datawipe" data-flashdatawipe="<?= $_GET['wipe'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['imp'])) : ?>
    <div class="flash-dataimport" data-flashdataimport="<?= $_GET['imp'] ?>"></div>
<?php endif; ?>

<?php } else { ?>
                            <div class="card-body">
                                    <h4 class="card-title">Data Table Pemilih</h4>
                                    <div align="right">
                                        <a href="<?php echo $admin_url; ?>pages/pemilih/action/cetak.php" class=" btn btn-primary"><i class="fa fa-print"></i>  Cetak Data</a>
                                    </div>
                                    <br>
<form action="pemilih.php" method="get">
    <label>Pencarian NIM :</label>
    <input type="text" class="form-control" name="cari" placeholder="Input NIM">
    <br>
    <div align="right">
    <input class="btn btn-primary" type="submit" value="cari">
    <a href="pemilih.php" class=" btn btn-danger">reset</a>
    </div>
</form>

<br>

<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
                                <div class="table-responsive">
                                        <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr align="center">
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>NIM</th>
                                                <th>Password</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Prodi/Jurusan</th>
                                                <th>Keterangan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

    if(isset($_GET['cari'])){

        $cari = $_GET['cari'];
        $data_pemilih = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi WHERE nim like '%".$cari."%'");

    }else{
       

                        $batas = 15;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;    
 
                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $SqlQuery = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi");

                        $jumlah_data = mysqli_num_rows($SqlQuery);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $data_pemilih = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi limit $halaman_awal, $batas");

                        $no = $halaman_awal+1;
            }

                        $batas = 15;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;    
 
                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $SqlQuery = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi");

                        $jumlah_data = mysqli_num_rows($SqlQuery);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $no = $halaman_awal+1;

                        while ($pml=mysqli_fetch_array($data_pemilih)) {
                        ?>
                                            <tr>
                                                <td align="center"><?php echo $no++; ?></td>
                                                <td align="center"><?php echo $pml['kode_pemilih']; ?></td>
                                                <td align="center"><?php echo $pml['nim']; ?></td>
                                                <td><?php echo $pml['password']; ?></td>
                                                <td><?php echo $pml['nama_pemilih']; ?></td>
                                                <td><?php echo $pml['jenis_kelamin']; ?></td>
                                                <td><?php echo $pml['nama_prodi']; ?></td>
                                                <td align="center"><?php echo $pml['keterangan']; ?></td>
                                <?php if($pml['status'] == "Aktif") { ?>
                                                <td align="center">
                                                    <a href="<?php echo $admin_url; ?>pages/pemilih/action/aktivasi.php?kode_pemilih=<?php echo $pml['kode_pemilih'];?>&status=<?php echo $pml['status'];?>" data-toggle="tooltip" data-placement="top" title="Disable" class="label label-success btn-offpem"><?php echo $pml['status']; ?></a>
                                                </td>
                                <?php } else { ?>
                                                  <td align="center">
                                                        <a href="<?php echo $admin_url; ?>pages/pemilih/action/aktivasi.php?kode_pemilih=<?php echo $pml['kode_pemilih'];?>&status=<?php echo $pml['status'];?>" data-toggle="tooltip" data-placement="top" title="Aktivasi" class="label label-warning btn-onpem"><?php echo $pml['status']; ?></a>
                                                </td>
                                 <?php } ?>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$previous'"; } ?>>Previous</a>
                </li>
                <?php 
                for($x=1;$x<=$total_halaman;$x++){
                    ?> 
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                    <?php
                }
                ?>              
                <li class="page-item">
                    <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                </li>
            </ul>
        </nav>

<?php if (isset($_GET['onpem'])) : ?>
    <div class="flash-dataonpem" data-flashdataonpem="<?= $_GET['onpem'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['offpem'])) : ?>
    <div class="flash-dataoffpem" data-flashdataoffpem="<?= $_GET['offpem'] ?>"></div>
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