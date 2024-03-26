<?php 

session_start();

session_unset();

session_destroy();

?>

<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
<script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Logout',
            text: 'Anda berhasil logout!'
        }).then((result) => {
            window.location='index.php';
        })
</script>
