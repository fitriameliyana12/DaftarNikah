<?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email=input($_POST["email"]);
        $kritik_saran=input($_POST["kritik_saran"]);
       

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="insert into komentar_user (
        email,
        kritik_saran)
        values
        (
        '$email',
        '$kritik_saran')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
           echo "Kritik dan Saran Anda Telah Terkirim";
           echo "<meta http-equiv='refresh' content='1 url = index.html'>";
        }
        else {
            echo "Maaf, Kritik dan Saran Anda Gagal Terkirim";
            exit;
        }
        }
        ?>