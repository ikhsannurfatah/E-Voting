<?php
session_start();
?>  
     <!-- == Home Section Start == -->
    <section id="home" >
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
        <!-- silider start -->
        <div class="main-slider-1 white-clr-all">
          <div id="carosel-mr-1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carosel-mr-1" data-slide-to="0" class="active"></li>
              <li data-target="#carosel-mr-1" data-slide-to="1"></li>
              <li data-target="#carosel-mr-1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner main-sld" role="listbox">
              <div class="item active main-sld">
                <!-- change slider image -->
                <div class="slider-bg" style="background-image: url('assets/image/slider/slider1.jpg');"></div>
                <div class="slider-cell">
                  <div class="slider-ver">
                    <div class="slider-con text-center">
                      <h1>Sistem Informasi E-voting <span><br>Pemilihan Presiden Mahasiswa Universitas Amikom Yogyakarta</span></h1>
                      <p><?php echo $deskripsi; ?></p>
<?php if($sesi_voting == "Mulai Voting") {?>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="voting.php">Mulai Voting</a>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="kandidat.php">Lihat Kandidat</a>
<?php } else { ?>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="kandidat.php">Lihat Kandidat</a>
<?php } ?> 
                    </div>
                    <!-- end slider content -->
                  </div>
                </div>
              </div>
              <!-- end single item -->
              <div class="item main-sld">
                <!-- change slider image -->
                <div class="slider-bg" style="background-image: url('assets/image/slider/slider2.png');"></div>
                <div class="slider-cell">
                  <div class="slider-ver">
                    <div class="slider-con text-center">
                      <h1>Sistem Informasi E-voting <span><br>Pemilihan Presiden Mahasiswa Universitas Amikom Yogyakarta</span></h1>
                      <p><?php echo $deskripsi; ?></p>
                      
<?php if($sesi_voting == "Mulai Voting") {?>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="voting.php">Mulai Voting</a>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="kandidat.php">Lihat Kandidat</a>
<?php } else { ?>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="kandidat.php">Lihat Kandidat</a>
<?php } ?>

                    </div>
                    <!-- end slider content -->
                  </div>
                </div>
              </div>
              <!-- end single item -->
              <div class="item main-sld">
                <!-- change slider image -->
                <div class="slider-bg" style="background-image: url('assets/image/banner/banner3.jpg');"></div>
                <div class="slider-cell">
                  <div class="slider-ver">
                    <div class="slider-con text-center">
                      <h1>Sistem Informasi E-voting <span><br>Pemilihan Presiden Mahasiswa Universitas Amikom Yogyakarta</span></h1>
                      <p><?php echo $deskripsi; ?></p>

<?php if($sesi_voting == "Mulai Voting") {?>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="voting.php">Mulai Voting</a>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="kandidat.php">Lihat Kandidat</a>
<?php } else { ?>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="kandidat.php">Lihat Kandidat</a>
<?php } ?>

                    </div>
                    <!-- end slider content -->
                  </div>
                </div>
              </div>
              <!-- end single item -->
            </div>
            <a class="left slide-control-mr" href="#carosel-mr-1" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right slide-control-mr" href="#carosel-mr-1" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <!-- end slider bar -->
        <!--slider section start-->	
    </section>
    <!-- == Home Section End == -->

    <!-- == Service Section Start == -->
    <section id="service" class="service section-padding-top">
    	<div class="container">
    		<div class="section-title">
    			<h2>Why choose <span>Evoting ?</span></h2>
    			<span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
    		</div>
    		<div class="row content service-grid-s1">
    			<!-- single serivce-->
    			<div class="col-md-4 col-sm-6">
    				<div class="grid">
    					<div class="icon">
                 <i><img src="assets/image/logo/icon1.jpg" alt=""></i>
              </div>
              <div class="details">
                  <h3><a href="#"> Pemilihan suara mudah dilakukan</a></h3>
                  <p align="justify"> Pemilihan suara pun mudah dilakukan, karena hanya dengan cara memilih gambar di panel yang menggambarkan surat suara</p>
              </div>
    				</div>
    			</div>
    			<!-- single serivce-->
    			<div class="col-md-4 col-sm-6">
    				<div class="grid">
    					<div class="icon">
                <i><img src="assets/image/logo/icon2.jpg" alt=""></i>
              </div>
              <div class="details">
                  <h3><a href="#"> Pemilihan tanpa menggunaka kertas </a></h3>
                  <p align="justify"> Dengan e-voting kita tidak perlu mencetak kertas surat suara, sehingga sangat mendukung program green technology</p>
              </div>
    				</div>
    			</div>
    			<!-- single serivce-->
    			<div class="col-md-4 col-sm-6">
    				<div class="grid">
    					<div class="icon">
                <i><img src="assets/image/logo/icon3.jpg" alt=""></i>
              </div>
              <div class="details">
                  <h3><a href="#"> Proses penghitungan suara menjadi lebih cepat dan akurat</a></h3>
                  <p align="justify"> Karena pada saat pemungutan suara selesai, dilakukan proses penutupan, dan hasil pemilihan pun bisa langsung diperoleh secara akurat</p>
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- == Service Section End == -->

    <!-- == About Section Start == -->
    <section id="about" class="about section-padding-top">
      <div class="container">
        <div class="section-title">
          <h2>Alur <span>Pemilihan</span></h2>
          <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>

        <div class="row">
          <!-- About image -->
          <div class="col-md-6">
            <a href="#" class="img-about">
              <img src="assets/image/about/about1.jpg" alt="" class="img-responsive" width="500" height="300">
            </a>
          </div>
          <div class="col-md-6">
            <!-- About text-->
            <div class="about-details">
              <h5>Melakukan Registrasi</h5>
              <p align="justify">Tahapan pertama adalah calon pemilih datang ke TPS untuk melakukan registrasi yang berbasis KTM(Kartu Tanda Mahasiswa). Calon pemilih diminta menunjukkan KTM(Kartu Tanda Mahasiswa) yang kemudian diregristrasi dengan NIM(Nomor Induk Mahasiswa). Jika sudah terdaftar di DPT (Daftar Pemilih Tetap) di komputer panitia, calon pemilih pun resmi bisa memilih.
              <br>
              Daftar DTP ini sendiri terhubung langsung ke database menggunakan jalur internet. Dengan data tersentralisasi seperti ini, pemilih bisa memilih di TPS.
              <br>
              Sistem tersentralisasi juga membuat seseorang tidak bisa memilih lagi, karena data di sistem sudah menandai kalau ia sudah memilih. Artinya tinta biru penanda telah memilih tidak diperlukan lagi.
              </p>
            </div>
            <!-- /About text -->
          </div>
        </div>

        <div class="row">
          <!-- About image -->
          <div class="col-md-6">
            <br>
            <br>
            <br>
            <h5>Memilih di Bilik Suara atau TPS</h5>
              <p align="justify">Di bilik suara, akan ada Komputer/Laptop yang menjadi perangkat untuk memilih. Ketika kode pemilih dimasukkan ke sistem untuk proses validasi, maka pada monitor akan menampilkan kandidat yang bisa dipilih. Untuk memilih, Anda cukup pilih gambar kandidat. Nanti akan muncul halaman konfirmasi “Anda yakin memilih kandidat A?” dan pilihan Ya atau Tidak.
              Perlu dicatat, sistem tidak membolehkan memilih dua kandidat atau lebih.
              </p>
          </div>
          <div class="col-md-6">
            <!-- About text-->
            <div class="about-details">
              <a href="#" class="img-about">
              <img src="assets/image/about/about2.jpg" alt="" class="img-responsive" width="500" height="300">
            </a>
            </div>
            <!-- /About text -->
          </div>
        </div>

        <div class="row">
          <!-- About image -->
          <div class="col-md-6">
            <a href="#" class="img-about">
              <img src="assets/image/about/about3.png" alt="" class="img-responsive" width="500" height="300">
            </a>
          </div>
          <div class="col-md-6">
            <!-- About text-->
            <div class="about-details">
              <h5>Perhitungan Suara</h5>
              <p align="justify">Ketika proses pemilihan selesai, komputer di bilik suara secara otomatis bisa langsung menampilkan perhitungan suara. Dengan begitu, tidak lagi dibutuhkan proses perhitungan suara manual yang melelahkan itu. Setiap pihak yang berhak mendapatkan salinan hasil perhitungan suara juga akan mendapatkan bukti cetak dari hasil perhitungan suara. Lagi-lagi, ini meminimalisir pekerjaan panitia karena tidak perlu menyalin hasil perhitungan suara secara manual. Proses e-voting ini juga membuat proses real count menjadi lebih cepat.
              </p>
            </div>
            <!-- /About text -->
          </div>
        </div>

        <br>
        <br>

        <div class="row">
          <!-- About image -->
          <div class="col-md-12" align="center">
            <a href="#" class="img-about">
              <img src="assets/image/about/about4.jpg" alt="" class="img-responsive" width="400" height="300">
            </a>
          </div>
          <div class="col-md-12" align="center">
            <!-- About text-->
            <div class="about-details" align="center">
              <h5>Terima Kasih</h5>
              <p>Sudah melakukan voting menggunakan sistem informasi e-voting ini. <br> Jika ada kendala mohon hubungi admin atau panitia.
              </p>
            </div>
            <!-- /About text -->
          </div>
        </div>

      </div>
    </section>
    <!-- == About Section End == -->