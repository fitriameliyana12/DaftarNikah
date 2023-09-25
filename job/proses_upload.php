<?php
require_once 'koneksi.php';

$gambar = $_FILES['gambar']['name'];
$keterangan = $_POST['keterangan'];

if(isset($_POST['upload'])) {
 
  $eks_dibolehkan = ['png', 'jpg']; // ekstensi yang diperbolehkan
  $x = explode('.', $gambar); // memisahkan nama file dengan ekstensi
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];

  // cek ekstensi yang dibolehkan
  if(in_array($ekstensi, $eks_dibolehkan) === true) {
    move_uploaded_file($file_tmp, 'gambar/' . $gambar); // memindahkan file gambar
  
    // jalankan query insert
    $query = "INSERT INTO upload (gambar) VALUES ('$gambar')";
    $hasil = mysqli_query($koneksi, $query);

    if($hasil) {
      echo "<script>alert('Data berhasil disimpan')</script>";
   header('Location:index.php');
  } else {
   echo "<script>alert('Data gagal disimpan')</script>";
   header('Location:index.php');
  }
 } else {
  echo "<script>alert('Ekstensi harus PNG / JPG')</script>";
  header('Location:index.php');
 }
} else {
 echo "<script>alert('Data belum lengkap')</script>";
 header('Location:index.php');
}