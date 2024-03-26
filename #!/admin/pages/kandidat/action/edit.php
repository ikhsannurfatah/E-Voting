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
                    $queryEdit = mysqli_query($koneksi, "UPDATE tbl_kandidat SET nama_kandidat='$nama', tentang='$tentang', link='$link', foto='$nama_file', status='$status' WHERE no_urut='$noUrut'");
                    if ($queryEdit) {
                    echo "
                   <script>
                        window.location = '$admin_url'+'kandidat.php?edt=1';
                    </script>";
                } else {
                   echo "
                    <script>
                        window.location = '$admin_url'+'kandidat.php?ggl=1;
                    </script>";
                }
                } else {
                    $queryEdit = mysqli_query($koneksi, "UPDATE tbl_kandidat SET nama_kandidat='$nama', tentang='$tentang', link='$link', foto='$nama_file', status='$status' WHERE no_urut='$noUrut'");
                    if ($queryEdit) {
                    echo "
                   <script>
                        window.location = '$admin_url'+'kandidat.php?edt=1';
                    </script>";
                } else {
                   echo "
                    <script>
                        window.location = '$admin_url'+'kandidat.php?ggl=1;
                    </script>";
                }
                } 
                
            } else {
                echo "
                <script>
                    window.location = '$admin_url'+'kandidat.php?imger=1;
                </script>";
            }
        } else {
            echo "
            <script>
                alert('Ukuran foto terlalu besar');
                window.location = '$admin_url'+'kandidat.php?bigimg=1;
            </script>";
        }
    } else {
        echo "
        <script>
            window.location = '$admin_url'+'edit_kandidat.php?typimg=1;
        </script>";
    }             

?>