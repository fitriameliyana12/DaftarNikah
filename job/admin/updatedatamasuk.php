<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'kuaproyek'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

    $id = $_POST['id'];
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $kecamatan = $_POST['kecamatan'];
    $akad = $_POST['akad'];
    $tanggal_akad = $_POST['tanggal_akad'];
    $alamat_akad = $_POST['alamat_akad'];
    $nama_suami = $_POST['nama_suami'];
    $nik_suami = $_POST['nik_suami'];
    $tempat_lahir_suami = $_POST['tempat_lahir_suami'];
    $tanggal_lahir_suami = $_POST['tanggal_lahir_suami'];
    $alamat_suami = $_POST['alamat_suami'];
    $kewarganegaraan_suami = $_POST['kewarganegaraan_suami'];
    $agama_suami = $_POST['agama_suami'];
    $pekerjaan_suami = $_POST['pekerjaan_suami'];
    $status_suami = $_POST['status_suami'];
    $email_suami = $_POST['email_suami'];
    $no_telp_suami = $_POST['no_telp_suami'];
    $nama_istri = $_POST['nama_istri'];
    $nik_istri = $_POST['nik_istri'];
    $tempat_lahir_istri = $_POST['tempat_lahir_istri'];
    $tanggal_lahir_istri = $_POST['tanggal_lahir_istri'];
    $alamat_istri = $_POST['alamat_istri'];
    $kewarganegaraan_istri = $_POST['kewarganegaraan_istri'];
    $agama_istri = $_POST['agama_istri'];
    $pekerjaan_istri = $_POST['pekerjaan_istri'];
    $status_istri = $_POST['status_istri'];
    $email_istri = $_POST['email_istri'];
    $no_telp_istri = $_POST['no_telp_istri'];

$sql = "UPDATE pendaftaran set tanggal_daftar='$tanggal_daftar', 
kecamatan='$kecamatan', 
akad='$akad', 
tanggal_akad='$tanggal_akad',
alamat_akad='$alamat_akad',
nama_suami='$nama_suami', 
nik_suami='$nik_suami', 
tempat_lahir_suami='$tempat_lahir_suami', 
tanggal_lahir_suami='$tanggal_lahir_suami', 
alamat_suami='$alamat_suami', 
kewarganegaraan_suami='$kewarganegaraan_suami', 
agama_suami='$agama_suami', 
pekerjaan_suami='$pekerjaan_suami', 
status_suami='$status_suami', 
email_suami='$email_suami', 
no_telp_suami='$no_telp_suami', 
nama_istri='$nama_istri', 
nik_istri='$nik_istri', 
tempat_lahir_istri='$tempat_lahir_istri', 
tanggal_lahir_istri='$tanggal_lahir_istri', 
alamat_istri='$alamat_istri', 
kewarganegaraan_istri='$kewarganegaraan_istri', 
agama_istri='$agama_istri', 
pekerjaan_istri='$pekerjaan_istri', 
status_istri='$status_istri', 
email_istri='$email_istri', 
no_telp_istri='$no_telp_istri' WHERE id='$id'";

		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
header("location: http://localhost/Daftar-Nikah/job/admin/datamasuk.php");
?>

