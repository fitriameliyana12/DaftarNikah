<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Pernikahan Online Kabupaten Jombang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Pendaftaran Pernikahan Kabupaten Jombang</h1><br><br><br>
    <div align="center"><img class="logo" src="images/kua2.png" title="Example Logo" alt="Example Logo"></div>
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        // $file = $_FILES['gambar_suami']['name'];
        // $file2 = $_FILES['gambar_istri']['name'];
        // $tmp_name = $_FILES['gambar_suami']['tmp_name'];
        // $tmp_name2 = $_FILES['gambar_istri']['tmp_name'];
        // move_uploaded_file($tmp_name, "images/".$file);
        // move_uploaded_file($tmp_name2, "images/".$file2);
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tanggal_daftar=input($_POST["tanggal_daftar"]);
        $kecamatan=input($_POST["kecamatan"]);
        $akad=input($_POST["akad"]);
        $tanggal_akad=input($_POST["tanggal_akad"]);
        $alamat_akad=input($_POST["alamat_akad"]);

        $nama_suami=input($_POST["nama_suami"]);
        $nik_suami=input($_POST["nik_suami"]);
        $tempat_lahir_suami=input($_POST["tempat_lahir_suami"]);
        $tanggal_lahir_suami=input($_POST["tanggal_lahir_suami"]);
        $alamat_suami=input($_POST["alamat_suami"]);
        $kewarganegaraan_suami=input($_POST["kewarganegaraan_suami"]);
        $agama_suami=input($_POST["agama_suami"]);
        $status_suami=input($_POST["status_suami"]);
        $email_suami=input($_POST["email_suami"]);
        $no_telp_suami=input($_POST["no_telp_suami"]);
        $pekerjaan_suami=input($_POST["pekerjaan_suami"]);
        // $gambar_suami=input($_POST["gambar_suami"]);

        $nama_istri=input($_POST["nama_istri"]);
        $nik_istri=input($_POST["nik_istri"]);
        $tempat_lahir_istri=input($_POST["tempat_lahir_istri"]);
        $tanggal_lahir_istri=input($_POST["tanggal_lahir_istri"]);
        $alamat_istri=input($_POST["alamat_istri"]);
        $kewarganegaraan_istri=input($_POST["kewarganegaraan_istri"]);
        $agama_istri=input($_POST["agama_istri"]);
        $status_istri=input($_POST["status_istri"]);
        $email_istri=input($_POST["email_istri"]);
        $no_telp_istri=input($_POST["no_telp_istri"]);
        $pekerjaan_istri=input($_POST["pekerjaan_istri"]);
        // $gambar_istri=input($_POST["gambar_istri"]);

        //Query input menginput data kedalam tabel pendaftaraan
        $sql="insert into pendaftaran (
        tanggal_daftar,
        kecamatan,akad,
        tanggal_akad,
        alamat_akad,
        nama_suami,
        nik_suami,
        tempat_lahir_suami,
        tanggal_lahir_suami,
        alamat_suami,
        kewarganegaraan_suami,
        agama_suami,
        status_suami,
        email_suami,
        no_telp_suami,
        pekerjaan_suami,
        nama_istri,
        nik_istri,
        tempat_lahir_istri,
        tanggal_lahir_istri,
        alamat_istri,
        kewarganegaraan_istri,
        agama_istri,
        status_istri,
        email_istri,
        no_telp_istri,
        pekerjaan_istri) 
        values
        (
        '$tanggal_daftar',
        '$kecamatan',
        '$akad',
        '$tanggal_akad',
        '$alamat_akad',
        '$nama_suami',
        '$nik_suami',
        '$tempat_lahir_suami',
        '$tanggal_lahir_suami',
        '$alamat_suami',
        '$kewarganegaraan_suami',
        '$agama_suami',
        '$status_suami',
        '$email_suami',
        '$no_telp_suami',
        '$pekerjaan_suami',
        '$nama_istri',
        '$nik_istri',
        '$tempat_lahir_istri',
        '$tanggal_lahir_istri',
        '$alamat_istri',
        '$kewarganegaraan_istri',
        '$agama_istri',
        '$status_istri',
        '$email_istri',
        '$no_telp_istri',
        '$pekerjaan_istri')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) { 
            echo "<div class='alert alert-success'> Selamat Anda telah berhasil mendaftar.</div>"; 
        }
        else {
            echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
        }
        }
        ?>
        <form id="form" method="post">

        <div class="alert alert-primary">
                <strong>Detail Nikah</strong>
            </div><br>
            <div class="row">
            <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Daftar:</label>
                        <input type="date" name="tanggal_daftar" class="form-control" required="">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan KUA:</label>
                        <select class="form-control" name="kecamatan" required="">
                            <option>Pilih</option>
                            <option value="Bandar Kedungmulyo">Bandar Kedungmulyo</option>
                            <option value="Bareng">Bareng</option>
                            <option value="Diwek">Diwek</option>
                            <option value="Gudo">Gudo</option>
                            <option value="Jogoroto">Jogoroto</option>
                            <option value="Jombang">Jombang</option>
                            <option value="Kabuh">Kabuh</option>
                            <option value="Kesamben">Kesamben</option>
                            <option value="Kudu">Kudu</option>
                            <option value="Megaluh">Megaluh</option>
                            <option value="Mojoagung">Mojoagung</option>
                            <option value="Mojowarno">Mojowarno</option>
                            <option value="Ngoro">Ngoro</option>
                            <option value="Ngusikan">Ngusikan</option>
                            <option value="Perak">Perak</option>
                            <option value="Peterongan">Peterongan</option>
                            <option value="Plandaan">Plandaan</option>
                            <option value="Ploso">Ploso</option>
                            <option value="Sumobito">Sumobito</option>
                            <option value="Tembelang">Tembelang</option>
                            <option value="Wonosalam">Wonosalam</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
            
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Akad Di:</label>
                        <select class="form-control" name="akad" required="">
                            <option>Pilih</option>
                            <option value="Di Rumah">Di Rumah</option> 
                            <option value="Di KUA">Di KUA</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Akad:</label>
                        <input type="date" name="tanggal_akad" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat Lokasi Akad:</label>
                        <textarea class="form-control" name="alamat_akad" rows="2" id="alamat_akad" required=""></textarea>
                    </div>
                </div>
            </div>

            <div class="row">

                
            </div>
            <br><br>

            <div class="alert alert-primary">
                <strong>Data Calon Suami</strong>
            </div><br>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama_suami" class="form-control" placeholder="Masukan Nama Lengkap" required="">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" name="nik_suami" class="form-control" placeholder="Masukan Nomor NIK" required="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir_suami" class="form-control" placeholder="Masukan Tempat Lahir" required="">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir_suami" class="form-control" required="">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat_suami" rows="2" id="alamat_suami" required=""></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan_suami" required="">
                            <option>Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama_suami" required="">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Status:</label>
                        <select class="form-control" name="status_suami" required="">
                            <option>Pilih</option>
                            <option value="Jejaka">Jejaka</option>
                            <option value="Beristri">Beristri</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email_suami" class="form-control" placeholder="Masukan Email" required="">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp_suami" class="form-control" placeholder="Masukan No Telp" required="">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Pekerjaan:</label>
                        <select class="form-control" name="pekerjaan_suami" required="">
                            <option>Pilih</option>
                            <option value="Pegawai Negri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="TNI">TNI</option>
                            <option value="Polisi">Polisi</option>
                            <option value="Petani">Petani</option>
                            <option value="Pengusaha">Pengusaha</option>
                            <option value="Atlet">Atlet</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                
                 <!-- <div class="col-sm-3">
                    <div class="form-group">
                        <label>Upload Foto:</label>
                        <form method="post" enctype="multipart/form-data">
                        <input type="file" name="gambar_suami"  id="gambar_suami">
                    </div>
                </div> -->
            </div>
            <br><br>

            <div class="alert alert-primary">
                <strong>Data Calon Istri</strong>
            </div><br>
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama_istri" class="form-control" placeholder="Masukan Nama Lengkap" required="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" name="nik_istri" class="form-control" placeholder="Masukan Nomor NIK" required="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir_istri" class="form-control" placeholder="Masukan Tempat Lahir" required="">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir_istri" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat_istri" rows="2" id="alamat_istri" required=""></textarea>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan_istri" required="">
                            <option>Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama_istri" required="">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Status:</label>
                        <select class="form-control" name="status_istri" required="">
                            <option>Pilih</option>
                            <option value="Perawan">Perawan</option>
                            <option value="Bersuami">Bersuami</option>
                            <option value="Cerai Hidup">Cerai Hidup</option>
                            <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email_istri" class="form-control" placeholder="Masukan Email" required="">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp_istri" class="form-control" placeholder="Masukan No Telp" required="">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Pekerjaan:</label>
                        <select class="form-control" name="pekerjaan_istri" required="">
                            <option>Pilih</option>
                            <option value="Pegawai Negri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="TNI">TNI</option>
                            <option value="Polisi">Polisi</option>
                            <option value="Petani">Petani</option>
                            <option value="Pengusaha">Pengusaha</option>
                            <option value="Atlet">Atlet</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                
                <!-- <div class="col-sm-3">
                    <div class="form-group">
                        <label>Upload Foto:</label>
                        <form method="post" enctype="multipart/form-data">
                        <input type="file" name="gambar_istri" id="gambar_istri">
                    </div>
                </div> -->
            </div>
            <br><br>


            <div class="alert alert-primary">
                <strong>Dokumen Persyaratan</strong>
            </div>
            <div class row="row">
                    <p>  1. Surat Keterangan Nikah (Di Dapat Dari Kelurahan)</p>
                    <p>  2. Surat Izin Orangtua (Jika Calon Pengantin Di Bawah 19 Tahun)</p>
                    <p>  3. Surat Dispensasi Pengadilan Agama Bagi Calon Yang Berusia Di Bawah 19 Tahun</p>
                    <p>  4. Surat Akta Cerai (Jika Calon Pengantin Sudah Cerai)</p>
                    <p>  5. Surat Izin Komandan (Jika Calon Pengantin TNI/POLRI)</p>
                    <p>  6. Surat Akta Kematian (Jika Calon Pengantin Duda/Janda Ditinggal Mati)</p>
                    <p>  7. Surat Izin Kedutaan Bagi WNA</p>
                    <p>  8. Fotocopy (KTP, KTP Wali Nikah, KK, AKTE, IJAZAH)</p>
                    <p>  9. Pas Photo 2x3 = 4 Lembar</p>
                    <p>  10. Pas Photo 4x6 = 2 Lembar</p>
                    <p>  11. Surat Keterangan Suntik TT Dari Puskesmas</p>
                    <br><br>

                    Apakah Anda Yakin Data Yang Diisikan Sudah Benar Dan Valid ? 
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button><br><br><br><br>
                    
                    <a href="logout.php" class="btn btn-danger" role="button">Logout</a>
                
                </div>

            </div>
        </form>
    </div>
</body>
</html>