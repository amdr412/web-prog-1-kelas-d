<html>
<head>
	<title>Tambah Data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$nim = mysqli_real_escape_string($mysqli, $_POST['nim']);
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$jurusan = mysqli_real_escape_string($mysqli, $_POST['jurusan']);

	if(empty($nim) || empty($nama) || empty($jurusan)) {
				
		if(empty($nim)) {
			echo "<font color='red'>Anda belum menambahkan Nim.</font><br/>";
		}
		
		if(empty($nama)) {
			echo "<font color='red'>Anda belum menambahkan Nama.</font><br/>";
		}
		
		if(empty($jurusan)) {
			echo "<font color='red'>Anda belum menambahkan Jurusan.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Kembali Ke Halaman Sebelumnya</a>";
	} else { 	
		$result = mysqli_query($mysqli, "INSERT INTO users(nim,nama,jurusan) VALUES('$nim','$nama','$jurusan')");
		echo "<font color='green'>Data berhasil di tambahkan.";
		echo "<br/><a href='index.php'>Lihat Data Mahasiswa</a>";
	}
}
?>
</body>
</html>
