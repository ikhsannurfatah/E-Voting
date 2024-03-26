        <div class="content-body">

<?php if (isset($_GET['msg'])) : ?>
    <div class="flash-datacek" data-flashdatacek="<?= $_GET['msg'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['ggl'])) : ?>
    <div class="flash-datagagal" data-flashdatagagal="<?= $_GET['ggl'] ?>"></div>
<?php endif; ?>

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pemilih</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data Pemilih</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Tambah Data Pemilih</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo $admin_url; ?>pages/pemilih/action/simpan.php" method="post" enctype="multipart/form-data">
<?php     

include "../../lib/config.php";
include "../../lib/koneksi.php";

$query = "SELECT max(kode_pemilih) as maxKode FROM tbl_pemilih";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$kodePemilih = $data['maxKode'];

$noUrut = (int) substr($kodePemilih, 3, 3);
$noUrut++;

$char = "PEM";
$newID = $char . sprintf("%03s", $noUrut);
?>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="kode">Kode <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $newID; ?>" disabled="disabled">
                                                <input type="hidden" name="kode" id="kode" value="<?php echo $newID; ?>" />
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
                                                <input type="text" class="form-control" id="nim" name="nim" placeholder="Nomor Induk Mahasiswa" maxlength="10" onkeypress="return harusAngka(event)" required>
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
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama">Nama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" onkeypress="return harusHuruf(event)" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="gender">Jenis Kelamin <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="gender" name="gender" required>
                                                    <option value="">Please select</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="idprodi">Prodi/Jurusan <span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <select class="form-control" id="idprodi" name="idprodi" required>
                                                    <option value="">Please select</option>
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
                                            <label class="col-lg-4 col-form-label" for="status">Status<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="status" name="status" value="Tidak Aktif" disabled="disabled">
                                                <input type="hidden" name="status" id="status" value="Tidak Aktif" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="keterangan">Keterangan<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="Belum Voting" disabled="disabled">
                                                <input type="hidden" name="keterangan" id="keterangan" value="Belum Voting" />
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