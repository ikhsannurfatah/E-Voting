<div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <!--== change the logo name ==-->
                    <a href="index.php">
                        <h3><span>E</span>  VOTING</h3>
                    </a>
                </div>
                    <!-- Responsive Menu Start -->
                <div class="responsive-menu"></div>
                            <!-- Responsive Menu End -->
            </div>

                        <?php
                        include "lib/config.php";
                        include "lib/koneksi.php";

                        $kode_pemilih=$_SESSION['kode_pemilih'];

                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_pemilih WHERE kode_pemilih = '$kode_pemilih'");
                        $hasilQuery=mysqli_fetch_array($query);
                ?>
<?php if(isset($_SESSION['kode_pemilih'])) {?>
    <?php if($sesi_voting == "Mulai Voting" && $quick_count == "Tampilkan") {?>
<div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            <li>
                <a href="quick_count.php">quick count</a>
            </li>
            <li>
                <a href="voting.php">voting</a>
            </li>
            <li>
                <a href="#"><?php echo $_SESSION['nama_pemilih'] ?></a>
            <ul>
            <li>
                <a href="#">Keterangan : <?php echo $_SESSION['keterangan'] ?></a>
            </li>
            <?php if($_SESSION['keterangan'] == "Belum Voting") {?>
            <li><a href="voting.php">Voting Sekarang</a></li>
            <?php } else { ?>
            <?php } ?>  
            <li>
                <a href="logout.php">Logout</a>
            </li>
            </ul>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } elseif ($sesi_voting == "Mulai Voting" && $quick_count == "Sembunyikan") { ?>
<div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            <li>
                <a href="quick_count.php">quick count</a>
            </li>
            <li>
                <a href="voting.php">voting</a>
            </li>
            <li>
                <a href="#"><?php echo $_SESSION['nama_pemilih'] ?></a>
            <ul>
            <li>
                <a href="#">Keterangan : <?php echo $_SESSION['keterangan'] ?></a>
            </li>
            <?php if($_SESSION['keterangan'] == "Belum Voting") {?>
            <li><a href="voting.php">Voting Sekarang</a></li>
            <?php } else { ?>
            <?php } ?>
            <li>
                <a href="logout.php">Logout</a>
            </li>
            </ul>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } elseif ($sesi_voting == "Tutup Voting" && $quick_count == "Tampilkan") { ?>
<div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            <li>
                <a href="#"><?php echo $_SESSION['nama_pemilih'] ?></a>
            <ul>
            <li>
                <a href="#">Keterangan : <?php echo $_SESSION['keterangan'] ?></a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
            </ul>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } elseif ($sesi_voting == "Tutup Voting" && $quick_count == "Sembunyikan") { ?>
<div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            <li>
                <a href="#"><?php echo $_SESSION['nama_pemilih'] ?></a>
            <ul>
            <li>
                <a href="#">Keterangan : <?php echo $_SESSION['keterangan'] ?></a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
            </ul>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } else { ?>
    <div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            <li>
                <a href="#"><?php echo $_SESSION['nama_pemilih'] ?></a>
            <ul>
            <li>
                <a href="#">Keterangan : <?php echo $_SESSION['keterangan'] ?></a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
            </ul>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } ?>
<?php } else { ?>
<?php if($sesi_voting == "Mulai Voting" && $quick_count == "Tampilkan") {?>
<div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            <li>
                <a href="quick_count.php">quick count</a>
            </li>
            <li>
                <a href="login.php">mulai voting</a>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } elseif ($sesi_voting == "Mulai Voting" && $quick_count == "Sembunyikan") {?>
 <div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            <li>
                <a href="login.php">mulai voting</a>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } elseif ($sesi_voting == "Tutup Voting" && $quick_count == "Tampilkan") {?>
<div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            <li>
                <a href="quick_count.php">quick count</a>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } else { ?>
<div class="col-md-9 col-sm-12">
    <div class="mainmenu">
    <nav>
        <ul id="navigation">
            <li class="current-page-item">
                <a href="index.php">home</a>
            </li>
            <li>
                <a href="kandidat.php">kandidat</a>
            </li>
            </ul>
        </nav>
        </div>
</div>
<?php } ?> 
            <?php } ?>

                    </div>
                </div>
            </div>
    </header>