<?php
include "../../lib/koneksi.php";
 
$idprodi=$_GET['id_prodi'];
$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_prodi WHERE id_prodi='$idprodi'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idprodi=$hasilQuery['id_prodi']; 
$fakultas=$hasilQuery['fakultas'];  
$nama_prodi=$hasilQuery['nama_prodi'];

?>

        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Prodi/Jurusan</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Prodi/Jurusan</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Edit Data Prodi/Jurusan</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="pages/tampilan/action/edit_prodi.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="idprodi" value="<?php echo $idprodi; ?>">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="idprodi">ID Prodi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="idprodi" name="idprodi" value="<?php echo $idprodi; ?>" disabled="disabled">
                                                <input type="hidden" name="idprodi" id="idprodi" value="<?php echo $idprodi; ?>" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="fakultas">Fakultas <span class="text-danger">*</span>
                                            </label>
                                                <div class="col-lg-6">
                                                <select class="form-control" id="fakultas" name="fakultas">
                                                    <option value="<?php echo $fakultas; ?>"><?php echo $fakultas; ?></option>
                                                    <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
                                                    <option value="Fakultas Ekonomi & Sosial">Fakultas Ekonomi & Sosial</option>
                                                    <option value="Fakultas Sains & Teknologi">Fakultas Sains & Teknologi</option>
                                                    <option value="Pascasarjana">Pascasarjana</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama_prodi">Nama Prodi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="<?php echo $nama_prodi; ?>" required>
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