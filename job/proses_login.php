<?php
include "config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT*FROM pengguna WHERE username='$username' and password='$password'";
$koneksi = mysqli_connect("localhost", "root", "", "kuaproyek")or die("Gagal Koneksi ke Database!!");
$result = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($result);

if($cek>0){
	session_start();
	$_SESSION['username'] = $username;
	header("location:formdaftar.php");
	?>
	Anda berhasil Login, Silakan menuju
	<a href="formdaftar.php">Halaman Home</a>
	<?php
}else{
	echo "<script>alert('Username atau Password salah')</script>";
	echo "<meta http-equiv='refresh' content='1 url = login.html'>";
	echo mysqli_error($connect);
}
?>