<?php

// nama  : ahmad ropii
// nim   : 16090153
// kelas : 4D

$panjang = 4;
$lebar = 2;

$luas = $panjang * $lebar;
echo $luas; echo "<br>";
echo $panjang + $lebar; echo "<br>";
echo $panjang /  $lebar; echo "<br>";
echo $panjang -  $lebar; echo "<br>";

$panjang += $lebar; // $panjang = $panjang + $ lebar
echo "panjang : $panjang<br><br>";

$a = 6;
$b = "6";

var_dump($a); echo "<br>";
var_dump($b); echo "<br>";

var_dump($a == $b); echo "<br>";
var_dump($a === $b);

$result = ++$a; // ++$a
echo $a;
?>