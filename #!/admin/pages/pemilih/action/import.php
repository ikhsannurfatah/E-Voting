<?php 
// menghubungkan dengan koneksi
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";
// menghubungkan dengan library excel reader
require_once "../../../../admin/import/excel_reader2.php";

//// upload file xls
$target = basename($_FILES['filedata']['name']) ;
move_uploaded_file($_FILES['filedata']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filedata']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filedata']['name'],false);

// menghitung jumlah baris data yang ada 
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;


for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	
	$kode_pemilih 	= $data->val($i, 1); //kode
	$nim 			= $data->val($i, 2); //nim
	$nama_pemilih  	= $data->val($i, 3); //nama
	$jenis_kelamin 	= $data->val($i, 4); //jenis kelamin
	$prodi 			= $data->val($i, 5); //prodi
	$keterangan 	= $data->val($i, 6); //keterangan voting/belum
	$status 		= $data->val($i, 7); //status aktif/tida



//mengecek jika kolom kode produk pada template excel ada yang kosong
$cari = mysqli_num_rows(mysqli_query($koneksi,"SELECT kode_pemilih FROM tbl_pemilih WHERE kode_pemilih = '$kode_pemilih'"));

if (empty($kode_pemilih)){
 		
 	 echo "<script>window.alert('import gagal kode pemilih tidak boleh ada yang kosong !')</script>";
	 echo "<script>window.location='".$_SERVER['HTTP_REFERER']."'</script>";
	 
}
elseif ($cari > 0){
  	
		$query=mysqli_query($koneksi,"UPDATE tbl_pemilih SET kode_pemilih='$kode_pemilih',
										nim='$nim',
										nama_pemilih='$nama_pemilih',
										jenis_kelamin='$jenis_kelamin',
										prodi='$prodi',
										keterangan='$keterangan',
										status='$status'
										WHERE kode_pemilih='$kode_pemilih'");
													
													
 }
 else{
  		// input data ke database (table mproduk)
		$query=mysqli_query($koneksi,"INSERT INTO tbl_pemilih (kode_pemilih, nim, nama_pemilih, jenis_kelamin, prodi, keterangan, status) VALUES ('$kode_pemilih','$nim','$nama_pemilih','$jenis_kelamin','$prodi','$keterangan','$status')");
		
 }

																									
													
$berhasil++;
 	
}


// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filedata']['name']);

// alihkan halaman ke index.php
echo "<script>window.location='$admin_url'+'pemilih.php?imp=1'</script>";

?>