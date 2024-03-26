<?php
include "../../lib/koneksi.php";
 
$noUrut=$_GET['no_urut'];
$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_kandidat WHERE no_urut='$noUrut'");
$hasilQuery=mysqli_fetch_array($queryEdit);
$noUrut=$hasilQuery['no_urut']; 
$nama=$hasilQuery['nama_kandidat'];
$tentang=$hasilQuery['tentang'];
$link=$hasilQuery['link'];
$foto=$hasilQuery['foto'];
$status=$hasilQuery['status'];

?>

        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kandidat</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Kandidat</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Edit Data Kandidat</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo $admin_url; ?>pages/kandidat/action/edit.php" method="post" enctype="multipart/form-data">
                                    	<input type="hidden" name="no_urut" value="<?php echo $noUrut; ?>">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="noUrut">No Urut <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="noUrut" name="noUrut" value="<?php echo $noUrut; ?>" disabled="disabled">
                                                <input type="hidden" name="noUrut" id="noUrut" value="<?php echo $noUrut; ?>" />
                                            </div>
                                        </div>

      
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nama">Nama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="tentang">Tentang <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="ckeditor" id="tentang" name="tentang" rows="5"><?php echo $tentang; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="link">Link Video Preview <span class="text-danger">(opsional)</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="link" name="link" value="<?php echo $link; ?>">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="foto">Foto <span class="text-danger">*harus upload foto baru</span>
                                            </label>
                                            <div class="col-lg-6">
                                            	<img src="upload/<?php echo $foto;?>" alt="<?= $foto; ?>" height="120" width="100">
                                                <input type="file" class="form-data" id="foto" name="foto" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="status">Status <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="status" name="status" required>
                                                    <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                                    <option value="Diskualifikasi">Diskualifikasi</option>
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