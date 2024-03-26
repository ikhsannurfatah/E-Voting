<?php
include "../../lib/koneksi.php";
 
$kode=$_GET['kode_pemilih'];
$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_pemilih WHERE kode_pemilih='$kode'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$kode=$hasilQuery['kode_pemilih']; 
$nim=$hasilQuery['nim'];
$password=$hasilQuery['password'];   
$nama=$hasilQuery['nama_pemilih'];
$gender=$hasilQuery['jenis_kelamin'];
$idprodi=$hasilQuery['prodi'];
$keterangan=$hasilQuery['keterangan'];
$status=$hasilQuery['status'];  

?>

        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pemilih</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Pemilih</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Edit Data Pemilih</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo $admin_url; ?>pages/pemilih/action/edit.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="kode_pemilih" value="<?php echo $kode; ?>">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kode">Kode <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $kode; ?>" disabled="disabled">
                                                <input type="hidden" name="kode" id="kode" value="<?php echo $kode; ?>" />
                                            </div>
                                        </div>

<script>
    function harusAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
          return false;
        return true;
      }
</script>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nim">NIM <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nim" name="nim" maxlength="10" value="<?php echo $nim; ?>" onkeypress="return harusAngka(event)" required>
                                            </div>
                                        </div>

<script>
function harusHuruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
}
</script>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama">Nama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" onkeypress="return harusHuruf(event)" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="gender">Jenis Kelamin <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="gender" name="gender" required>
                                                    <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="idprodi">Prodi <span class="text-danger">*</span>
                                            </label>
                                                <div class="col-lg-6">
                                                <select class="form-control" id="idprodi" name="idprodi" required>
                        <?php
                        include "../../lib/koneksi.php";
                        $QuerryProdi = mysqli_query($koneksi,"SELECT * FROM tbl_pemilih INNER JOIN tbl_prodi ON tbl_pemilih.prodi = tbl_prodi.id_prodi WHERE kode_pemilih='$kode'");
                        while ($idprodi=mysqli_fetch_array($QuerryProdi)) {
                        ?>
                                                    <option value="<?php echo $idprodi['id_prodi'];?>"><?php echo $idprodi['nama_prodi'];?></option>
                                                    <?php } ?>

                                                    <?php 
                        
                        include "../../lib/koneksi.php";
                        $QuerryProdi = mysqli_query($koneksi,"SELECT * FROM tbl_prodi");
                        while ($idprodi=mysqli_fetch_array($QuerryProdi)) {
                        ?>
                                                    <option value="<?php echo $idprodi['id_prodi'];?>"><?php echo $idprodi['nama_prodi'];?></option><?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="keterangan">Keterangan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="keterangan" name="keterangan">
                                                    <option value="<?php echo $keterangan; ?>"><?php echo $keterangan; ?></option>
                                                    <option value="Belum Voting">Belum Voting</option>
                                                    <option value="Sudah Voting">Sudah Voting</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="status">Status <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="status" name="status">
                                                    <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                                    <option value="Aktif">Aktif</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>