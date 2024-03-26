        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pemilih</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Import Data Pemilih</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Import Data Pemilih</h4>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo $admin_url; ?>pages/pemilih/action/import.php" method="post" enctype="multipart/form-data">

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="filedata">Import File <span class="text-danger">*xls</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-data" id="filedata" name="filedata" required>
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