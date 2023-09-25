<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set('Asia/Jakarta');
session_start();

$koneksi = new mysqli("localhost", "root", "", "kuaproyek");
$koneksi = mysqli_connect("localhost", "root", "", "kuaproyek")or die("Gagal Koneksi ke Database!!");
if ($koneksi->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}

?>