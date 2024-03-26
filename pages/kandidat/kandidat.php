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
            <h2>Halaman Kandidat</h2>
            <div class="breadcrumb">
              <ul>
                <li>Daftar Kandidat</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- ==== Portfolio section start ==== -->
    <section  class="section-padding gray-brackground" id="portfolio">
    <div class="container" align="center">

          <div class="portfolio-content">
             <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-container portfolio-masonry portfolio-column-count-4">
                <?php
                include "lib/config.php";
                include "lib/koneksi.php";

                $SqlQuery = mysqli_query($koneksi, "SELECT * FROM tbl_kandidat WHERE status='Aktif'");

                while ($knd=mysqli_fetch_array($SqlQuery)) { ?>

                 <!-- Single portfolio item -->
                 <div class="portfolio-item cat1 cat3">
                     <div class="portfolio-item-content" align="center">
                         <div class="item-thumbnail">
                             <!-- Change the dummy image -->
                             <img src="<?php echo $admin_url; ?>upload/<?php echo $knd['foto'];?>" alt="" width="550" height="400">
                         </div>
                         <div class="portfolio-description">
                             <h4><a href="<?php echo $base_url; ?>kandidat_detail.php?no_urut=<?php echo $knd['no_urut'];?>" >0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></a></h4>
        
                             <!-- Change the dummy image -->
                             <a href="<?php echo $admin_url; ?>upload/<?php echo $knd['foto'];?>" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="<?php echo $base_url; ?>kandidat_detail.php?no_urut=<?php echo $knd['no_urut'];?>"><i class="fa fa-link"></i></a>
                         </div>
                         <br>
                         <div class="portfolio-info" align="center">
                               <a href="<?php echo $base_url; ?>kandidat_detail.php?no_urut=<?php echo $knd['no_urut'];?>"><h5><b>0<?php echo $knd['no_urut']; ?> - <?php echo $knd['nama_kandidat']; ?></b></h5></a>
                            </div>                                    
                     </div>
                 </div>
                 <?php } ?>

             </div>          
          </div>   
       </div>

    </section>
    <!-- ==== Protfolio section end ==== -->