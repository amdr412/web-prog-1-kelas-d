<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Aplikasi Data Mahasiswa</title>
</head>
<body bgcolor="#CCCCCC">

<h2>Aplikasi Data Mahasiswa</h2>
<hr>
<a href=add.html  title="Tambah Data Lagi"><button>TAMBAH DATA</button></a><br/><br/>


<table width='80%' border="1">

	<tr bgcolor='#CCCCCC'>
		<td width="112" height="29" align="center" valign="middle" bgcolor="#81BFD5">NIM</td>
		<td width="176" align="center" valign="middle" bgcolor="#81BFD5">NAMA</td>
		<td width="200" align="center" valign="middle" bgcolor="#81BFD5">JURUSAN</td>
		<td width="100" align="center" valign="middle" bgcolor="#81BFD5">OPSI</td>
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nim']."</td>";
		echo "<td>".$res['nama']."</td>";
		echo "<td>".$res['jurusan']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Anda yakin akan menghapus data?')\">Delete</a></td>";		
	}
	?>
</table>
</body>
</html>
