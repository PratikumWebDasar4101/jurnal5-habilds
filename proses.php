<?php 

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$email = $_POST["email"];
$inputlagi = "<br><a href='registrasi.php'>Input Lagi</a>";
$br = "<br>";

if (strlen($nama) > 25) {
	echo "Nama tidak boleh lebih dari 25 huruf.";
	echo $inputlagi;
	echo $br;
}
if (!is_numeric($nim) || strlen((string)$nim) > 10) {
	echo "Nim harus angka dan tidak lebih dari 10 digit.";
	echo $inputlagi;
	echo $br;
}
if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email)) {
	echo "Format email salah!";
	echo $inputlagi;
	echo $br;
}else {
	header("Location: komentar.php");
}

?>
