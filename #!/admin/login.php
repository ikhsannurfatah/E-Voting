
<?php 
include "../../lib/koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

if (!ctype_alnum($username) OR !ctype_alnum($password)) { ?>

<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
<script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: 'Silahkan isi username & password dengan benar!'
        }).then((result) => {
            window.location='index.php';
        })
</script>

<?php
	} else {



$sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);

if ($row > 0) {
    session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_user'] = $data['nama_user'];
        $_SESSION['level'] = $data['level']; 
        $_SESSION['foto'] = $data['foto'];
?>
<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
<script>
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil',
            text: 'Selamat, Anda berhasil login'
        }).then((result) => {
            window.location='dashboard.php';
        })
</script>
<?php
} else { ?>

<script src="assets/dist/sweetalert2.all.min.js"></script>
<body></body>
<script>
        Swal.fire({
            icon: 'error',
            title: 'Login Gagal',
            text: 'Username & password anda salah!'
        }).then((result) => {
            window.location='index.php';
        })
</script>

<?php        
}
}

?>