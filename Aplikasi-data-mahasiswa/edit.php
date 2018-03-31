<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
	} else {	
		
		$result = mysqli_query($mysqli, "UPDATE users SET nim='$nim',nama='$nama',jurusan='$jurusan' WHERE id=$id");

		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nim = $res['nim'];
	$nama = $res['nama'];
	$jurusan = $res['jurusan'];
}
?>
<html>
<head>	
	<title>Ubah Data</title>
</head>

<body>
<h2>Form Ubah Data</h2>
<hr>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $nim;?>"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><label class="col-sm-2 control-label">
                <span class="col-sm-3">
                <select class="form-control" name="jurusan" placeholder="Pilih Jurusan" required>
                  <option value=""></option>
                  <option value="Teknik Informatika">Teknik Informatika</option>
                  <option value="Kebidanan">Kebidanan</option>
                  <option value="Farmasi">Farmasi</option>
                  <option value="Akuntansi">Akuntansi</option>
                  <option value="Teknik Komputer">Teknik Komputer</option>
                  <option value="Teknik Mesin">Teknik Mesin</option>
                  <option value="Teknik Elektro">Teknik Elektro</option>
                </select>
                </span>
              <div class="col-sm-3"></div>
              </td>
			</tr>
			<tr> 
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update">
               <a href="index.php" class="btn btn-warning">Close</a></td>
			</tr>
		</table>
	</form>
</body>
</html>
