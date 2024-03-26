 <!-- ==== footer section start ==== -->
    <footer class="footer-bg section-padding-top footer">
      <div class="footer-widget-area">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="f-widget">
                <a href="index.php">
                  <!-- Change the logo here-->
                  <h4 class="logo-text1"><span>E</span>  Voting</h4>
                </a>
                <p class="m-t-30" align="justify">E-voting adalah mekanisme pemilihan suara berbasis sistem elektronik. Termasuk di dalamnya proses regristrasi pemilih, pencoblosan, sampai perhitungan hasil suara.</p>
                
              </div>
            </div>
            <div class="col-md-3">
              <div class="f-widget">
                <div class="f-widget-title">
                   <h4>Address</h4>
                </div>
              <ul class="f-address">
                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>  Universitas Amikom Yogyakarta</li>
                  <li><i class="fa fa-phone"></i>  +62-8777-7733-664</li>
                  <li><i class="fa fa-envelope" aria-hidden="true"></i>  ikhsan.0765@students.amikom.ac.id</li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
                  <div class="f-widget">
                  <div class="f-widget-title">
                    <h4>Feeds</h4>
                  </div>
                  <ul class="instagram-widget">
                     <li><a href="#"><img src="assets/image/portfolio/1.png" alt="" class="img-responsive"></a></li>
                     <li><a href="#"><img src="assets/image/portfolio/2.png" alt="" class="img-responsive"></a></li>
                     <li><a href="#"><img src="assets/image/portfolio/3.png" alt="" class="img-responsive"></a></li>
                     <li><a href="#"><img src="assets/image/portfolio/4.png" alt="" class="img-responsive"></a></li>
                     <li><a href="#"><img src="assets/image/portfolio/5.png" alt="" class="img-responsive"></a></li>
                     <li><a href="#"><img src="assets/image/portfolio/6.png" alt="" class="img-responsive"></a></li>
                     <li><a href="#"><img src="assets/image/portfolio/7.png" alt="" class="img-responsive"></a></li>
                     <li><a href="#"><img src="assets/image/portfolio/8.png" alt="" class="img-responsive"></a></li>
                     <li><a href="#"><img src="assets/image/portfolio/9.png" alt="" class="img-responsive"></a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-3">
                <div class="f-widget">
                <div class="f-widget-title">
                  <h4>Contact Persons</h4>
                </div>
                <ul class="useful-links">
                  <li><i class="fa fa-caret-right" aria-hidden="true"></i> 
                    <a href="https://wa.me/+628777773364?text=Website ada bug!">
                    Admin : Ikhsan Nur Fatah</a>
                  </li>
                  <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                    <a href="https://wa.me/#?text=Website ada bug!">Panitia : ****</a>
                  </li>
                  <li><i class="fa fa-caret-right" aria-hidden="true"></i>
                    <a href="https://wa.me/#?text=Website ada bug!">Panitia : ****</a>
                  </li>
                  <li><i class="fa fa-caret-right" aria-hidden="true"></i> 
                    <a href="https://wa.me/#?text=Website ada bug!">Panitia : ****</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-area">
        <div class="container">
          <div class="row text-center">
             <div class="copyright-text">
              <br>
                <p>© Copyright 2021. All Rights Reserved. Designed by <a href="#">Ikhsan Nur Fatah</a></p>
             </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ==== footer section end ==== -->

    <!-- All JS Here -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.parallax-1.1.3.js"></script>
    <script src="assets/js/slick.min.js"></script>  
    <script src="assets/js/jquery.magnific-popup.min.js"></script> 
    <script src="assets/js/wow.min.js"></script> 
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.lineProgressbar.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/tweetie.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    $('.btn-vote').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Voting Sekarang',
            text: 'Apakah anda yakin memilih kandidat ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    const flashdatavoting = $('.flash-datavoting').data('flashdatavoting')
    if (flashdatavoting) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Voting berhasil!'
        })
    }

  </script>

    
</body>
</html>