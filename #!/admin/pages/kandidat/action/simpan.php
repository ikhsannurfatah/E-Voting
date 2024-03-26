<?php
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";

    $noUrut = $_POST['noUrut'];
    $nama = $_POST['nama'];
    $tentang = $_POST['tentang'];
    $link = $_POST['link'];
    $status = $_POST['status'];

    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $tipe_file = $_FILES['foto']['type'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    $path = "../../../upload/" . $nama_file;

    if ($tipe_file == "image/jpeg" || $tipe_file = "image/png") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {

                if ($link == "") {
                    $link = "Tidak Ada";
                    $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kandidat (no_urut, nama_kandidat, tentang, link, foto, status) VALUES ('$noUrut','$nama','$tentang','$link','$nama_file','$status')");
                if ($querySimpan) {
                    echo "
                   <script>
                        window.location = '$admin_url'+'kandidat.php?add=1';
                    </script>";
                } else {
                   echo "
                    <script>
                        window.location = '$admin_url'+'kandidat.php?ggl=1';
                    </script>";
                }

                } else {
                    $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kandidat (no_urut, nama_kandidat, tentang, link, foto, status) VALUES ('$noUrut','$nama','$tentang','$link','$nama_file','$status')");
                if ($querySimpan) {
                    echo "
                   <script>
                        window.location = '$admin_url'+'kandidat.php?add=1';
                    </script>";
                } else {
                   echo "
                    <script>
                        window.location = '$admin_url'+'add_kandidat.php?ggl=1';
                    </script>";
                }

                }
                
                
            } else {
                echo "
                <script>
                    window.location = '$admin_url'+'add_kandidat.php?imger=1';
                </script>";
            }
        } else {
            echo "
            <script>
                window.location = '$admin_url'+'add_kandidat.php?bigimg=1';
            </script>";
        }
    } else {
        echo "
        <script>
            window.location = '$admin_url'+'add_kandidat.php?typimg=1';
        </script>";
    }             

?>