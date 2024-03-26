<?php 
// menghubungkan dengan koneksi
include "../../../../../lib/config.php";
include "../../../../../lib/koneksi.php";
// menghubungkan dengan library excel reader
require_once "../../../../../admin/import/excel_reader2.php";

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
	
	$id_vote 			= $data->val($i, 1); //kode
	$waktu_vote 		= $data->val($i, 2); //nim
	$kode_pemilih  		= $data->val($i, 3); //nama
	$no_urut 			= $data->val($i, 4); //jenis kelamin
	$kandidat_dipilih 	= $data->val($i, 5); //prodi




//mengecek jika kolom kode produk pada template excel ada yang kosong
$cari = mysqli_num_rows(mysqli_query($koneksi,"SELECT id_vote FROM tbl_vote WHERE id_vote = '$id_vote'"));

if (empty($id_vote)){
 		
 	 echo "<script>window.alert('import gagal kode pemilih tidak boleh ada yang kosong !')</script>";
	 echo "<script>window.location='".$_SERVER['HTTP_REFERER']."'</script>";
	 
}
elseif ($cari > 0){
  	
		$query=mysqli_query($koneksi,"UPDATE tbl_vote SET id_vote='$id_vote',
										waktu_vote='$waktu_vote',
										kode_pemilih='$kode_pemilih',
										no_urut='$no_urut',
										kandidat_dipilih='$kandidat_dipilih',
										
										WHERE id_vote='$id_vote'");
													
													
 }
 else{
  		// input data ke database (table mproduk)
		$query=mysqli_query($koneksi,"INSERT INTO tbl_vote (id_vote, waktu_vote, kode_pemilih, no_urut, kandidat_dipilih) VALUES ('$id_vote','$waktu_vote','$kode_pemilih','$no_urut','$kandidat_dipilih')");
		
 }

																									
													
$berhasil++;
 	
}


// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filedata']['name']);

// alihkan halaman ke index.php
echo "<script>window.alert('sukses import $berhasil data!')</script>";
echo "<script>window.location='$admin_url'+'voting.php'</script>";

?>