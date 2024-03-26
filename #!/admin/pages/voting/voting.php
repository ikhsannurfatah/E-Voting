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
                                    <h4 class="card-title">Data Voting</h4>
                                    <div align="right">

                                        <!--<a href="import_voting.php" class=" btn btn-success"><i class="fa fa-address-book"></i>  Import Data</a>-->
                                        
                                        <a href="<?php echo $admin_url; ?>pages/voting/action/cetak.php" class=" btn btn-primary"><i class="fa fa-print"></i>  Cetak Data</a>
                                        <a href="<?php echo $admin_url; ?>pages/voting/action/clear_data.php" class=" btn btn-danger btn-wipe" title="Clear"><i class="fa fa-trash"></i>  Kosongkan Data</a>
                                    </div>
                                    <br>
               
                                <div class="table-responsive">

                                    <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Vote</th>
                                                <th>Waktu Voting</th>
                                                <th>Kandidat Dipilih</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $batas = 20;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $SqlQuery = mysqli_query($koneksi, "SELECT tbl_vote.id_vote,tbl_vote.waktu_vote,tbl_vote.kandidat_dipilih,tbl_vote.no_urut,tbl_kandidat.no_urut,tbl_kandidat.nama_kandidat FROM tbl_kandidat JOIN tbl_vote ON tbl_vote.no_urut=tbl_kandidat.no_urut ORDER BY id_vote");

                        $jumlah_data = mysqli_num_rows($SqlQuery);
                        $total_halaman = ceil($jumlah_data / $batas);
                        
                        $data_voting = mysqli_query($koneksi,"SELECT tbl_vote.id_vote,tbl_vote.waktu_vote,tbl_vote.kandidat_dipilih,tbl_vote.no_urut,tbl_kandidat.no_urut,tbl_kandidat.nama_kandidat FROM tbl_kandidat JOIN tbl_vote ON tbl_vote.no_urut=tbl_kandidat.no_urut ORDER BY id_vote limit $halaman_awal, $batas");   

                        $no = $halaman_awal+1;

                        while ($vot=mysqli_fetch_array($data_voting)) {
                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $vot['id_vote']; ?></td>
                                                <td><?php echo $vot['waktu_vote']; ?></td>
                                                <td>0<?php echo $vot['kandidat_dipilih']; ?> - <?php echo $vot['nama_kandidat']; ?></td>
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

<?php if (isset($_GET['wipe'])) : ?>
    <div class="flash-datawipe" data-flashdatawipe="<?= $_GET['wipe'] ?>"></div>
<?php endif; ?>

<?php } else { ?>
                                    <div class="card-body">
                                    <h4 class="card-title">Data Voting</h4>
                                    <div align="right">
                                        <a href="<?php echo $admin_url; ?>pages/voting/action/cetak.php" class=" btn btn-primary"><i class="fa fa-print"></i>  Cetak Data</a>
                                        
                                    </div>
                                    <br>
                                        <table class="table table-bordered table-striped verticle-middle">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Vote</th>
                                                <th>Waktu Voting</th>
                                                <th>Kandidat Dipilih</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php
                        include "../../lib/config.php";
                        include "../../lib/koneksi.php";

                        $batas = 20;
                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
                        
                        

                        $data_voting = mysqli_query($koneksi,"SELECT tbl_vote.id_vote,tbl_vote.waktu_vote,tbl_vote.kandidat_dipilih,tbl_vote.no_urut,tbl_kandidat.no_urut,tbl_kandidat.nama_kandidat FROM tbl_kandidat JOIN tbl_vote ON tbl_vote.no_urut=tbl_kandidat.no_urut ORDER BY id_vote limit $halaman_awal, $batas");   
 
                        $previous = $halaman - 1;
                        $next = $halaman + 1;

                        $SqlQuery = mysqli_query($koneksi, "SELECT tbl_vote.id_vote,tbl_vote.waktu_vote,tbl_vote.kandidat_dipilih,tbl_vote.no_urut,tbl_kandidat.no_urut,tbl_kandidat.nama_kandidat FROM tbl_kandidat JOIN tbl_vote ON tbl_vote.no_urut=tbl_kandidat.no_urut ORDER BY id_vote");

                        $jumlah_data = mysqli_num_rows($SqlQuery);
                        $total_halaman = ceil($jumlah_data / $batas);

                        $no = $halaman_awal+1;

                        while ($vot=mysqli_fetch_array($SqlQuery)) {
                        ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $vot['id_vote']; ?></td>
                                                <td><?php echo $vot['waktu_vote']; ?></td>
                                                <td>0<?php echo $vot['kandidat_dipilih']; ?> - <?php echo $vot['nama_kandidat']; ?></td>
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

<?php if (isset($_GET['wipe'])) : ?>
    <div class="flash-datawipe" data-flashdatawipe="<?= $_GET['wipe'] ?>"></div>
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