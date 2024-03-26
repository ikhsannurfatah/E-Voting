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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kandidat</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data Kandidat</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Tambah Data Kandidat</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo $admin_url; ?>pages/kandidat/action/simpan.php" method="post" enctype="multipart/form-data">
<?php     

include "../../lib/config.php";
include "../../lib/koneksi.php";

$query = "SELECT max(no_urut) as maxNo FROM tbl_kandidat";

$hasil = mysqli_query($koneksi, $query);
$data  = mysqli_fetch_array($hasil);
$noUrut = $data['maxNo'];

$noUrut = $noUrut;
$noUrut++;

$newID = $noUrut;
?>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="noUrut">No Urut <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="noUrut" name="noUrut" value="<?php echo $newID; ?>" disabled="disabled">
                                                <input type="hidden" name="noUrut" id="noUrut" value="<?php echo $newID; ?>" />
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
                                            <label class="col-lg-4 col-form-label" for="tentang">Tentang <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="ckeditor" id="tentang" name="tentang" rows="5" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="link">Link Video Preview <span class="text-danger">(opsional)</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="link" name="link" placeholder="Link Video/Youtube">
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
                                            <label class="col-lg-4 col-form-label" for="status">Status<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="status" name="status" value="Aktif" disabled="disabled">
                                                <input type="hidden" name="status" id="status" value="Aktif" />
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