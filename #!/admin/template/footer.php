<!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Sistem Informasi Evoting by <a href="#">Ikhsan Nur Fatah</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="assets/plugins/common/common.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/gleek.js"></script>
    <script src="assets/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="assets/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="assets/plugins/d3v3/index.js"></script>
    <script src="assets/plugins/topojson/topojson.min.js"></script>
    <script src="assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="assets/js/dashboard/dashboard-1.js"></script>
    <script type="text/javascript" src="assets/js/ckeditor/ckeditor.js"></script>
    <script src="assets/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $('.btn-onpem').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Aktivasi Akun',
            text: 'Apakah anda yakin ingin mengaktifkan akun pemilih ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aktifkan'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-offpem').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Aktivasi Akun',
            text: 'Apakah anda yakin ingin menonaktifkan akun pemilih ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Nonaktifkan'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-onvot').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Mulai Voting',
            text: 'Apakah anda yakin ingin memulai sesi voting ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Mulai Voting'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-offvot').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Tutup Voting',
            text: 'Apakah anda yakin ingin menutup sesi voting ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tutup Voting'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-oncount').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Tampilkan Quick Count',
            text: 'Apakah anda yakin ingin menampilkan halaman quick count ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tampilkan'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-offcount').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Sembunyikan Quick Count',
            text: 'Apakah anda yakin ingin menyembunyikan halaman quick count ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sembunyikan'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-onknd').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Aktivasi Kandidat',
            text: 'Apakah anda yakin ingin mengaktifkan kandidat ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aktifkan'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-offknd').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Aktivasi Kandidat',
            text: 'Apakah anda yakin ingin mendiskualifikasi kandidat ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Diskualifikasi'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-del').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Hapus Data',
            text: 'Apakah anda yakin ingin menghapus data ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('.btn-wipe').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Kosongkan Data',
            text: 'Apakah anda yakin ingin menghapus semua data ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    $('#btn').on('click', function() {
        Swal.fire({
            icon: 'success',
            title: 'Your Title!',
            text: 'Your Text!'
        })
    })

    const flashdatasimpan = $('.flash-datasimpan').data('flashdatasimpan')
    if (flashdatasimpan) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data berhasil disimpan!'
        })
    }

    const flashdataedit = $('.flash-dataedit').data('flashdataedit')
    if (flashdataedit) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data berhasil diubah!'
        })
    }

    const flashdatagagal = $('.flash-datagagal').data('flashdatagagal')
    if (flashdatagagal) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Data gagal disimpan!'
        })
    }

    const flashdataerrordel = $('.flash-dataerrordel').data('flashdataerrordel')
    if (flashdataerrordel) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Data gagal dihapus!'
        })
    }

    const flashdatahapus = $('.flash-datahapus').data('flashdatahapus')
    if (flashdatahapus) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data berhasil dihapus!'
        })
    }

    const flashdatawipe = $('.flash-datawipe').data('flashdatawipe')
    if (flashdatawipe) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Data berhasil dikosongkan!'
        })
    }

    const flashdatacek = $('.flash-datacek').data('flashdatacek')
    if (flashdatacek) {
        Swal.fire({
            icon: 'info',
            title: 'Data Sudah Ada',
            text: 'Silahkan input data yang lain!'
        })
    }

    const flashdataonvot = $('.flash-dataonvot').data('flashdataonvot')
    if (flashdataonvot) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Sesi voting berhasil dimulai!'
        })
    }

    const flashdataoffvot = $('.flash-dataoffvot').data('flashdataoffvot')
    if (flashdataoffvot) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Sesi voting berhasil ditutup!'
        })
    }

    const flashdataoncount = $('.flash-dataoncount').data('flashdataoncount')
    if (flashdataoncount) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Halaman Quick Count berhasil ditampilkan!'
        })
    }

    const flashdataoffcount = $('.flash-dataoffcount').data('flashdataoffcount')
    if (flashdataoffcount) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Halaman Quick Count berhasil disembunyikan!'
        })
    }

    const flashdataonpem = $('.flash-dataonpem').data('flashdataonpem')
    if (flashdataonpem) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Akun pemilih berhasil diaktifkan!'
        })
    }

    const flashdataoffpem = $('.flash-dataoffpem').data('flashdataoffpem')
    if (flashdataoffpem) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Akun pemilih berhasil dinonaktifkan!'
        })
    }

    const flashdataonknd = $('.flash-dataonknd').data('flashdataonknd')
    if (flashdataonknd) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Status kandidat berhasil diaktifkan!'
        })
    }

    const flashdataoffknd = $('.flash-dataoffknd').data('flashdataoffknd')
    if (flashdataoffknd) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Status kandidat berhasil didiskualifikasi!'
        })
    }

    const flashdataimgerror = $('.flash-dataimgerror').data('flashdataimgerror')
    if (flashdataimgerror) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Foto gagal diupload, silahkan upload ulang foto!'
        })
    }

    const flashdatabigimg = $('.flash-databigimg').data('flashdatabigimg')
    if (flashdatabigimg) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Ukuran foto terlalu besar!'
        })
    }

    const flashdatatypeimg = $('.flash-datatypeimg').data('flashdatatypeimg')
    if (flashdatatypeimg) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Type/Ekstensi foto salah!'
        })
    }

    const flashdataimport = $('.flash-dataimport').data('flashdataimport')
    if (flashdataimport) {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Berhasil Import Data!'
        })
    }
</script>

</body>

</html>