<!--**********************************
            Sidebar start
        ***********************************-->

<?php if($_SESSION['level'] == "Administrator") { ?>
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">

                    <li class="sidebar-item">
                        <div class="text-center">
                        <span class="nav-text">

                        <img class="rounded-circle mt-4" src="upload/<?php echo $_SESSION['foto'];?>" alt="<?= $_SESSION['foto']; ?>" height="100" width="100" alt="">
                        <h4 class="card-widget__title text-dark mt-3"><?php echo $_SESSION['nama_user']; ?></h4> 
                        <p class="text-muted"><?php echo $_SESSION['level']; ?></p>
                        <hr>
                        </span>
                        </div>
                    </li>


                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php" aria-expanded="false">
                            <i class="icon-home"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-people"></i><span class="nav-text">Data Pemilih</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="pemilih.php">Data Table Pemilih</a></li>
                            <li><a href="add_pemilih.php">Tambah Data Pemilih</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user"></i><span class="nav-text">Data Kandidat</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="kandidat.php">Data Table Kandidat</a></li>
                            <li><a href="add_kandidat.php">Tambah Data Kandidat</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="voting.php" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Data Voting</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="rekapitulasi.php" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Rekapitulasi Hasil Voting</span>
                        </a>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-settings"></i><span class="nav-text">Setting</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="user.php"><i class="icon-key"></i>Data User</a></li>
                            <li><a href="tampilan.php"><i class="icon-settings"></i>Pengaturan</a></li>
                            <li><a href="logout.php"><i class="icon-logout"></i>Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
<?php } else { ?>
            <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">

                    <li class="sidebar-item">
                        <div class="text-center">
                        <span class="nav-text">
                        <img class="rounded-circle mt-4" src="upload/<?php echo $_SESSION['foto'];?>" alt="<?= $_SESSION['foto']; ?>" height="100" width="100" alt="">
                        <h4 class="card-widget__title text-dark mt-3"><?php echo $_SESSION['nama_user']; ?></h4> 
                        <p class="text-muted"><?php echo $_SESSION['level']; ?></p>
                        <hr>
                        </span>
                        </div>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php" aria-expanded="false">
                            <i class="icon-home"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pemilih.php" aria-expanded="false">
                            <i class="icon-people"></i><span class="nav-text">Data Pemilih</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="kandidat.php" aria-expanded="false">
                            <i class="icon-user"></i><span class="nav-text">Data Kandidat</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="voting.php" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">Data Voting</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="rekapitulasi.php" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Rekapitulasi Hasil Voting</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php" aria-expanded="false">
                            <i class="icon-logout"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
<?php } ?>
        <!--**********************************
            Sidebar end
        ***********************************-->