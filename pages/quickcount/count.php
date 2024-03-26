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

    <section class="page-title page-bg bg-opacity section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Halaman Quick Count</h2>
            <div class="breadcrumb">
              <ul>
                <li>Hasil Perolehan Suara Setiap Kandidat</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

   <!-- start blog-main-section -->
        <section class="blog-main-section section-padding">
            <div class="container">
               <div class="row">
                     <div class="col col-lg-12">
                        <div class="blog-grids-s2 blog-content-wrapper">
                            <div class="row">
                    <?php
                        include "../lib/config.php";
                        include "../lib/koneksi.php";

                        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");

                        while ($knd=mysqli_fetch_array($SqlQuery)) {
                        ?>
                                <div class="col-md-6 m-b-30">
                                    <div class="grid">
                                        <div class="entry-header">
                                            <img src="<?php echo $admin_url;?>upload/<?php echo $knd['foto'];?>" alt="<?= $knd['foto']; ?>" width="350" height="550">
                                        </div>
                                        <div class="entry-body">
                                            <div class="entry-details">
                                                <h5>No urut : 0<?php echo $knd['no_urut']; ?></h5>
                                                <h5>Nama : <?php echo $knd['nama_kandidat']; ?></h5>
                                              
                                    <!-- kandidat 1-->

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
                                            <a href="#">Total Suara : <?php echo "{$result['Jumlah']}"; ?></a>
                                         <?php  } else { ?>
                                            <a href="#">Total Suara : 0</a>
                                        <?php  }  ?>

                                        <!-- kandidat 2-->

                                        <?php } elseif ($knd['no_urut'] == "2") { ?>
                                        <?php
                                        $QueryVote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
                                        while ($vot=mysqli_fetch_array($QueryVote)) {
                                        $id = $vot['kandidat_dipilih'];
                                        $data_vote = mysqli_query($koneksi, "SELECT kandidat_dipilih, COUNT(kandidat_dipilih) AS Jumlah FROM tbl_vote WHERE kandidat_dipilih = 2");
                                        $result= mysqli_fetch_array($data_vote);
                                        } ?>

                                        <?php if (isset($result['Jumlah'])) { ?>
                                            <a href="#">Total Suara : <?php echo "{$result['Jumlah']}"; ?></a>
                                         <?php  } else { ?>
                                            <a href="#">Total Suara : 0</a>
                                        <?php  }  ?>

                                        <!-- kandidat 3-->

                                        <?php } elseif ($knd['no_urut'] == "3") { ?>
                                        <?php
                                        $QueryVote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
                                        while ($vot=mysqli_fetch_array($QueryVote)) {
                                        $id = $vot['kandidat_dipilih'];
                                        $data_vote = mysqli_query($koneksi, "SELECT kandidat_dipilih, COUNT(kandidat_dipilih) AS Jumlah FROM tbl_vote WHERE kandidat_dipilih = 3");
                                        $result= mysqli_fetch_array($data_vote);
                                        } ?>

                                        <?php if (isset($result['Jumlah'])) { ?>
                                            <a href="#">Total Suara : <?php echo "{$result['Jumlah']}"; ?></a>
                                         <?php  } else { ?>
                                            <a href="#">Total Suara : 0</a>
                                        <?php  }  ?>

                                        <!-- kandidat 4-->
                                        <?php } elseif ($knd['no_urut'] == "4") { ?>
                                        <?php
                                        $QueryVote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
                                        while ($vot=mysqli_fetch_array($QueryVote)) {
                                        $id = $vot['kandidat_dipilih'];
                                        $data_vote = mysqli_query($koneksi, "SELECT kandidat_dipilih, COUNT(kandidat_dipilih) AS Jumlah FROM tbl_vote WHERE kandidat_dipilih = 4");
                                        $result= mysqli_fetch_array($data_vote);
                                        } ?>

                                        <?php if (isset($result['Jumlah'])) { ?>
                                            <a href="#">Total Suara : <?php echo "{$result['Jumlah']}"; ?></a>
                                         <?php  } else { ?>
                                            <a href="#">Total Suara : 0</a>
                                        <?php  }  ?>

                                        <?php } else { ?>
                                             <a href="#">Total Suara : 0</a>
                                    <?php } ?>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                              <!--  <div class="col-md-6 m-b-30">
                                    <div class="grid">
                                        <div class="entry-header">
                                            <img src="assets/image/blog/dummy-image.jpg" alt="" class="img img-responsive">
                                        </div>
                                        <div class="entry-body">
                                            <div class="entry-details">
                                                <h5>No urut : 01</h5>
                                                <h5>Nama : Kandidat A</h5>
                                                <a href="#">Total Suara : 0</i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->


                            </div>
                        </div>

                    </div>
               </div>
      
            </div> <!-- end container -->
        </section>
        <!-- end blog-main-section --> 
<?php     

include "../lib/config.php";
include "../lib/koneksi.php";

$data_pemilih = mysqli_query($koneksi, "SELECT * FROM tbl_pemilih");
$jumlah_pemilih = mysqli_num_rows($data_pemilih);

$data_Svote = mysqli_query($koneksi, "SELECT * FROM tbl_vote");
$jumlah_Svote = mysqli_num_rows($data_Svote);

$data_kandidat = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat");
$jumlah_kandidat = mysqli_num_rows($data_kandidat);

$jumlah_Bvote = $jumlah_pemilih - $jumlah_Svote;

?>

<section class ="counter-bg bg-opacity section-padding-60">
  <div class="container">
    <div class="row">
    <!-- Counter item-->  
      <div class="col-md-3 col-sm-6">
        <div class="counter-item style-2">
          <div class="counter-item-inner">
          <i class="fa fa-users" aria-hidden="true"></i>
          <h4>Jumlah Pemilih</h4>
          <span class="counter"><?php echo $jumlah_pemilih; ?></span>

          </div>
        </div>
      </div>
      <!-- Counter item-->  
      <div class="col-md-3 col-sm-6">
        <div class="counter-item style-2">
          <div class="counter-item-inner">
            <div class="icon"></div>
            <i class="fa fa-smile-o"></i>
          <h4>Jumlah Kandidat</h4>
          <span class="counter"><?php echo $jumlah_kandidat; ?></span>
          </div>
        </div>
      </div>
      <!-- Counter item-->  
      <div class="col-md-3 col-sm-6">
        <div class="counter-item style-2">          
          <div class="counter-item-inner">
            <div class="icon"></div>
            <i class="fa fa-trophy" aria-hidden="true"></i>
          <h4>Pemilih Yang Sudah Memilih</h4>
          <span class="counter"><?php echo $jumlah_Svote; ?></span>
          </div>
        </div>
      </div>
      <!-- Counter item-->  
      <div class="col-md-3 col-sm-6">
        <div class="counter-item style-2">
          <div class="counter-item-inner">
          <div class="icon"></div>
          <i class="fa fa-user" aria-hidden="true"></i>
          <h4>Pemilih Yang Belum Memilih</h4>
          <span class="counter"><?php echo $jumlah_Bvote; ?></span>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>