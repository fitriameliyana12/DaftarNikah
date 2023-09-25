<?php
include "config.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirm_password=$_POST["confirm_password"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into pengguna (username, email, password, confirm_password) values
		('$username','$email','$password','$confirm_password')";

$koneksi = mysqli_connect("localhost", "root", "", "kuaproyek")or die("Gagal Koneksi ke Database!!");
$result = mysqli_query($koneksi, $sql);

//Kondisi apakah berhasil atau tidak
  if ($result) {
	echo "Anda Berhasil Registrasi";
	echo "<meta http-equiv='refresh' content='1 url = login.html'>";
  }
else {
	echo "Maaf, Anda Gagal Registrasi";
	exit;
}  

?>