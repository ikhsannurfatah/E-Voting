<?php
include "../../lib/koneksi.php";
 
$nomor=$_GET['no'];
$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE no='$nomor'");
$hasilQuery=mysqli_fetch_array($queryEdit);
$nomor=$hasilQuery['no']; 
$nama=$hasilQuery['nama_user'];
$username=$hasilQuery['username'];
$password=$hasilQuery['password'];
$level=$hasilQuery['level'];
$foto=$hasilQuery['foto'];

?>


        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data User</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Edit Data User</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo $admin_url; ?>pages/user/action/edit.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="no" value="<?php echo $nomor; ?>">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nomor">No <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $nomor; ?>" disabled="disabled">
                                                <input type="hidden" name="nomor" id="nomor" value="<?php echo $nomor; ?>" />
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
                                            <label class="col-lg-4 col-form-label" for="nama">Nama <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama" name="nama" onkeypress="return harusHuruf(event)" value="<?php echo $nama; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="level">Level <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="level" name="level" required>
                                                    <option value=""><?php echo $level; ?></option>
                                                    <option value="administrator">Administrator</option>
                                                    <option value="panitia">Panitia</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="foto">Foto <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <img src="upload/<?php echo $foto;?>" alt="<?= $foto; ?>" height="120" width="100">
                                                <input type="file" class="form-data" id="foto" name="foto" required>
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