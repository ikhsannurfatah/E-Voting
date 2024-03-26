<?php
include "lib/koneksi.php";
 
$noUrut=$_GET['no_urut'];
$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_kandidat WHERE no_urut='$noUrut'");
$hasilQuery=mysqli_fetch_array($queryEdit);
$noUrut=$hasilQuery['no_urut']; 
$nama=$hasilQuery['nama_kandidat'];
$tentang=$hasilQuery['tentang'];
$link=$hasilQuery['link'];
$foto=$hasilQuery['foto'];
$status=$hasilQuery['status'];

?>
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
            <h2>Profil Kandidat</h2>
            <div class="breadcrumb">
              <ul>
                <li>Profile, Visi & Misi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about section-padding">
    <div class="container">
        <div class="row">
            <!-- About image -->
            <div class="col-md-6">
                <a href="#" class="img-about">
                    <img src="<?php echo $admin_url; ?>upload/<?php echo $foto;?>" alt="" class="img-responsive" width="500" height="300">
                </a>
            </div>
            <div class="col-md-6">
                <div class="about-details">
                    <h5><b>No urut : 0<?php echo $noUrut; ?>
                    <br>
                     Nama : <?php echo $nama; ?></b></h5>
                    <hr>
                    <h6>BIOGRAFI</h6>
                    <p><?php echo $tentang; ?></p>
                    <hr>
                    <?php if ($link == "Tidak Ada") { ?>
                    <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="#" title="Link Tidak Ada">Live Biografi</a>
                    <?php } else { ?>
                    <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="<?php echo $link; ?>">Live Biografi</a>
                        <?php } ?>
                </div>
            </div>
        </div>

    </div>
</section>