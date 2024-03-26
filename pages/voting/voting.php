<!-- == Color schemes == -->
        <div class="color-schemes">
             <div class="color-handle">
                 <i class="fa fa-cogs fa-spin" aria-hidden="true"></i>
             </div>
             <div class="color-plate">
                <h5>Chose color</h5>
                <a href="assets/css/colors/defaults-color.css" class="single-color defaults-color">Defaults</a>
               <a href="assets/css/colors/red-color.css" class="single-color red-color">Red</a>
               <a href="assets/css/colors/purple-color.css" class="single-color purple-color">Purple</a>
               <a href="assets/css/colors/sky-color.css" class="single-color sky-color">sky</a>
               <a href="assets/css/colors/green-color.css" class="single-color green-color">Green</a>
               <a href="assets/css/colors/blue-color.css" class="single-color pink-color">Pink</a>
              </div>
          </div>
<!-- == /Color schemes == -->

<?php
session_start();
if(empty($_SESSION['nama_pemilih'])){ ?>
<script type="text/javascript">
window.history.go(-1);
</script>
<?php 

} else{

  $kode =$_SESSION['kode_pemilih'];
  $sqlSelect=mysqli_query($koneksi,"SELECT * FROM tbl_pemilih WHERE kode_pemilih='$kode'");
} ?>

   <?php

   if ($_SESSION['keterangan'] == "Sudah Voting") { ?>

                    <?php
                        include "lib/config.php";
                        include "lib/koneksi.php";

                        $kode_pemilih=$_SESSION['kode_pemilih'];

                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_pemilih WHERE keterangan = ''");
                        $hasilQuery=mysqli_fetch_array($query);

                        $noUrut=$hasilQuery['no_urut'];

                ?>

                <br>
                <br>
                <br>
                <br>
    <section class="page-title page-bg bg-opacity section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Anda Sudah Voting</h2>
            <div class="breadcrumb">
              <ul>
                <li>Mohon maaf voting hanya dapat dilakukan 1x saja. Terima Kasih</li>
              </ul>
            </div>
            <br>
            <center>
              <h3><a href="index.php" class="btn btn-primary">HOME</a></h3>
              </center>
          </div>
        </div>
      </div>
    </section>
       <br>
                <br>
                <br>
                <br>

    <?php } else { ?>

    <!-- == Pricing Table Section Start == -->
    <section id="pricing1" class="section-padding">
      <div class="container">
        <div class="row">

           <?php
                        include "lib/config.php";
                        include "lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat WHERE status='Aktif'");

                        while ($knd=mysqli_fetch_array($SqlQuery)) {
                        ?>

           <div class="col-md-3">
                <div class="pricing-item text-center">
                  <div class="pricing-heading">
                    <h6 class="title">0<?php echo $knd['no_urut']; ?></h6>
                  </div>
                  <div class="pricing-body">
                    <div class="entry-header">
                      <img src="<?php echo $admin_url; ?>upload/<?php echo $knd['foto'];?>" alt="<?= $knd['foto']; ?>" width="250" height="200">
                    </div>
                    <br>
                      <h6><?php echo $knd['nama_kandidat']; ?></h6>

                     <a href="aksi_voting.php?no_urut=<?php echo $knd['no_urut'];?>&kode_pemilih=<?php echo $_SESSION['kode_pemilih'];?>" class="button btn btn-default btn-style hvr-shutter-out-vertical btn-vote">VOTE</a>
                  </div>
                </div>
            </div>
            <?php } ?>

        </div>
      </div>
    </section>
    <?php } ?>
    <!-- == Pricing Table Section End == -->