        <div class="content-body">

<?php if (isset($_GET['ggl'])) : ?>
    <div class="flash-datagagal" data-flashdatagagal="<?= $_GET['ggl'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['imger'])) : ?>
    <div class="flash-dataimgerror" data-flashdataimgerror="<?= $_GET['imger'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['bigimg'])) : ?>
    <div class="flash-databigimg" data-flashdatabigimg="<?= $_GET['bigimg'] ?>"></div>
<?php endif; ?>

<?php if (isset($_GET['typimg'])) : ?>
    <div class="flash-datatypeimg" data-flashdatatypeimg="<?= $_GET['typimg'] ?>"></div>
<?php endif; ?>

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data User</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Tambah Data User</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo $admin_url; ?>pages/user/action/simpan.php" method="post" enctype="multipart/form-data">
<?php     

include "../../lib/config.php";
include "../../lib/koneksi.php";

$query = "SELECT max(no) as maxNo FROM tbl_user";

$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$no = $data['maxNo'];

$no = $no;
$no++;

$newID = $no;
?>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="nomor">No <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nomor" name="nomor" value="<?php echo $newID; ?>" disabled="disabled">
                                                <input type="hidden" name="nomor" id="nomor" value="<?php echo $newID; ?>" />
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
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" onkeypress="return harusHuruf(event)" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="level">Level <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="level" name="level" required>
                                                    <option value="">Please select</option>
                                                    <option value="administrator">Administrator</option>
                                                    <option value="panitia">Panitia</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="foto">Foto <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
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