<?php
include "../../lib/koneksi.php";
 
$id_tampil=$_GET['id_tampil'];
$queryEdit=mysqli_query($koneksi, "SELECT * FROM tbl_tampil WHERE id_tampil='$id_tampil'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$id_tampil=$hasilQuery['id_tampil']; 
$title=$hasilQuery['title'];  
$deskripsi=$hasilQuery['deskripsi'];
$sesi_voting=$hasilQuery['sesi_voting'];
$quick_count=$hasilQuery['quick_count'];
?>

        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Setting Voting</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Setting</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Edit</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo $admin_url; ?>pages/tampilan/action/edit_tampilan.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id_tampil" value="<?php echo $id_tampil; ?>">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="id_tampil">ID <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="id_tampil" name="id_tampil" value="<?php echo $id_tampil; ?>" disabled="disabled">
                                                <input type="hidden" name="id_tampil" id="id_tampil" value="<?php echo $id_tampil; ?>" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="title">Judul <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="ckeditor" id="title" name="title" rows="5"><?php echo $title; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="deskripsi">Deskripsi <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="ckeditor" id="deskripsi" name="deskripsi" rows="5"><?php echo $deskripsi; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="sesi_voting">Sesi Voting <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="sesi_voting" name="sesi_voting" required>
                                                    <option value="<?php echo $sesi_voting; ?>"><?php echo $sesi_voting; ?></option>
                                                    <option value="Mulai Voting">Mulai Voting</option>
                                                    <option value="Tutup Voting">Tutup Voting</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="quick_count">Quick Count <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="quick_count" name="quick_count" required>
                                                    <option value="<?php echo $quick_count; ?>"><?php echo $quick_count; ?></option>
                                                    <option value="Tampilkan">Tampilkan</option>
                                                    <option value="Sembunyikan">Sembunyikan</option>
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