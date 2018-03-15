<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "phb_kelas_d";

$koneksi = new mysqli($server, $username, 
        $password, $db);

if($koneksi->connect_error) {
    die("Koneksi gagal : " . $koneksi->connect_error);    
} else {
    echo "Koneksi ke basis data SUKSES!";
}

//echo "kode : " . $_POST["kode"];
//echo "nama barang : " . $_POST["namaBarang"];
//echo "harga : " . $_POST["harga"];

// insert into harga_barang(kode, nama_barang, harga)
//   values(1, 'gula', 5000)
$query = "insert into harga_barang (kode, nama_barang, harga) ".
    "values(" . $_POST["kode"] . ", '" . $_POST["namaBarang"] .
    "'," . $_POST["harga"] . ")";
//echo "<br><br>" . $query;
if($koneksi->query($query) == true) {
    echo "<br>Data " . $_POST["namaBarang"] . " sudah tersimpan";
} else {
    echo "error : " . $query . " -> " . $koneksi->error;
}
?>