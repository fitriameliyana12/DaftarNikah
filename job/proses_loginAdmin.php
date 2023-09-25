<?php
include "config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT*FROM login_admin WHERE username='$username' and password='$password'";
$koneksi = mysqli_connect("localhost", "root", "", "kuaproyek")or die("Gagal Koneksi ke Database!!");
$result = mysqli_query($koneksi, $sql);
$cek = mysqli_num_rows($result);

if($cek>0){
	session_start();
	$_SESSION['username'] = $username;
	header("location:admin/index.html");
	?>
	Anda berhasil Login, Silakan menuju
	<a href="admin/index.html">Halaman Admin</a>
	<?php
}else{
	echo "<script>alert('Username atau Password salah')</script>";
	echo "<meta http-equiv='refresh' content='1 url = loginAdmin.html'>";
	echo mysqli_error($connect);
}
?>