<?php
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $tipe_file = $_FILES['foto']['type'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    $path = "../../../upload/" . $nama_file;

        if ($tipe_file == "image/jpeg" || $tipe_file = "image/png") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {
                $queryEdit = mysqli_query($koneksi, "UPDATE tbl_user SET nama_user='$nama', username='$username', password='$password', level='$level', foto='$nama_file' WHERE no='$nomor'");
                if ($queryEdit) {
                    echo "
                   <script>
                        window.location = '$admin_url'+'user.php?add=1';
                    </script>";
                } else {
                   echo "
                    <script>
                        window.location='$admin_url'+'user.php?ggl=1';
                    </script>";
                }
            } else {
                echo "
                <script>
                    window.location='$admin_url'+'edit_user.php?imger=1';
                </script>";
            }
        } else {
            echo "
            <script>
                window.location='$admin_url'+'user.php?bigimg=1';
            </script>";
        }
    } else {
        echo "
        <script>
            window.location='$admin_url'+'user.php?typimg=1';
        </script>";
    }             

?>