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
                $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_user (no, nama_user, username, password, level, foto) VALUES ('$nomor','$nama','$username','$password','$level','$nama_file')");
                if ($querySimpan) {
                    echo "
                   <script>
                        window.location = '$admin_url'+'user.php?add=1';
                    </script>";
                } else {
                   echo "
                    <script>
                        window.location = '$admin_url'+'add_user.php?ggl=1';
                    </script>";
                }
            } else {
                echo "
                <script>
                    window.location = '$admin_url'+'add_user.php?imger=1';
                </script>";
            }
        } else {
            echo "
            <script>
                window.location = '$admin_url'+'add_user.php?bigimg=1';
            </script>";
        }
    } else {
        echo "
        <script>
            window.location = '$admin_url'+'add_user.php?typimg=1';
        </script>";
    }             

?>