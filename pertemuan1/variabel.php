<?php

// nama  : ahmad ropii
// nim   : 16090153
// kelas : 4D

$nama = "tamami";
$semester = 7;
$honor = 10.7;

var_dump($nama); echo "<br>";
var_dump($semester); echo "<br>";
var_dump($honor); echo "<br>";

function printNama() {
	global $nama;
	echo "<h3>$nama</h3>";
}

function printMatakuliah(){
	$namaMatkul = "Web Programing";
	echo "<p>$namaMatkul</p>";
}


?>