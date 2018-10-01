<?php 
$komentar = $_POST["komentar"];

if (strlen($komentar) < 5) {
	echo "Komentar harus lebih dari 5 karakter!";
	echo "<br><a href='komentar.php'>Input lagi</a>";
}else {
	echo $komentar . "<br><br>";
	echo "Panjang Komentar : " . strlen($komentar);
}
?>