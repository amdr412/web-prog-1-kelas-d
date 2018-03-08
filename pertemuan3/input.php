<form action="input.php" method="get">
	Masukan Angka
	<input type="" name="nilai"><br>
	<input type="submit" value="Proses">
</form>

<?php
if(array_key_exists("nilai", $_GET)) {
	if($_GET["nilai"] > 0 &&
		$_GET["nilai"] <= 25) {
	echo "Nilai Kamu E";
  } elseif ($_GET["nilai"] > 25 &&
	    $_GET["nilai"] <= 50) {
	echo"Nilai Kamu D";
	 } elseif ($_GET["nilai"] > 50 &&
	    $_GET["nilai"] <= 65) {
	echo"Nilai Kamu C";
	 } elseif($_GET["nilai"] > 65 &&
	    $_GET["nilai"] <= 80) {
	 	echo"Nilai Kamu B";
	 } else{
	 	echo "Nilai Kamu A";
	 }
}else {
	echo "ISI DULU NILAI DIATAS";
}	
?>