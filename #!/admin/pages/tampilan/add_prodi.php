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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Prodi</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data Prodi</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
           <!-- <button id="btn">Click Me!</button> -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Tambah Data Prodi/Jurusan</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="pages/tampilan/action/simpan_prodi.php" method="post" enctype="multipart/form-data">
<?php     

include "../../lib/config.php";
include "../../lib/koneksi.php";

$query = "SELECT max(id_prodi) as maxKode FROM tbl_prodi";
$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$IdProdi = $data['maxKode'];

$noUrut = (int) substr($IdProdi, 3, 3);
$noUrut++;

$char = "PRD";
$newID = $char . sprintf("%03s", $noUrut);
?>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="idprodi">ID Prodi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="idprodi" name="idprodi" value="<?php echo $newID; ?>" disabled="disabled">
                                                <input type="hidden" name="idprodi" id="idprodi" value="<?php echo $newID; ?>" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="fakultas">Fakultas <span class="text-danger">*</span>
                                            </label>
                                             <div class="col-lg-6">
                                                <select class="form-control" id="fakultas" name="fakultas">
                                                    <option value="">Please select</option>
                                                    <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
                                                    <option value="Fakultas Ekonomi & Sosial">Fakultas Ekonomi & Sosial</option>
                                                    <option value="Fakultas Sains & Teknologi">Fakultas Sains & Teknologi</option>
                                                    <option value="Pascasarjana">Pascasarjana</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_prodi">Nama Prodi/Jurusan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Nama Prodi/Jurusan" required>
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