<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
else {
    die ("Error. No ID Selected!");    
}

$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'kuaproyek'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}
		
$query = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id='$id'");

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Data Pendaftaran</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
          
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <section id="main" class="wrapper">
        <div class="container">
			<div class="table-responsive">
            <h2>Detail Data Pendaftaran Pernikahan</h2>
            <table cellpadding="5" class="table table-bordered">
        <?php
            while($row=mysqli_fetch_assoc($query)):
            ?>
        <form method="post" action="updatedatamasuk.php">
        <tr>
            <td><b>Tanggal Daftar</b></td>
            <td>: 
            <input type="hidden" name="id" value="<?php echo $row['id']?>" >
            <input type="date" name="tanggal_daftar" value="<?php echo $row['tanggal_daftar']?>" >
            </td>
        </tr>
        <tr>
            <td><b>Kecamatan</b></td>
            <td>: 
            <input type="text" name="kecamatan" value="<?php echo $row['kecamatan']?>" >
            </td>
        </tr>
        <tr>
            <td><b>Tempat Akad</b></td>
            <td>: 
            <input type="text" name="akad" value="<?php echo $row['akad']?>" ></td>
        </tr>
        <tr>
            <td><b>Tanggal Akad</b></td>
            <td>: 
            <input type="date" name="tanggal_akad" value="<?php echo $row['tanggal_akad']?>" ></td>
        </tr>
        <tr>
            <td><b>Alamat Akad</b></td>
            <td>: 
            <input type="text" name="alamat_akad" value="<?php echo $row['alamat_akad']?>" ></td>
        </tr>

        <tr tr height="40">
        </tr>

        <tr>
            <td><b>Nama Suami</b></td>
            <td>: 
            <input type="text" name="nama_suami" value="<?php echo $row['nama_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>NIK Suami</b></td>
            <td>: 
            <input type="text" name="nik_suami" value="<?php echo $row['nik_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>TTL Suami</b></td>
            <td>: 
            <input type="text" name="tempat_lahir_suami" value="<?php echo $row['tempat_lahir_suami']?>">, 
            <input type="date" name="tanggal_lahir_suami" value="<?php echo $row['tanggal_lahir_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>Alamat Suami</b></td>
            <td>: 
            <input type="text" name="alamat_suami" value="<?php echo $row['alamat_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>Kewarganegaraan Suami</b></td>
            <td>: 
            <input type="text" name="kewarganegaraan_suami" value="<?php echo $row['kewarganegaraan_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>Agama Suami</b></td>
            <td>: 
            <input type="text" name="agama_suami" value="<?php echo $row['agama_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>Pekerjaan Suami</b></td>
            <td>: 
            <input type="text" name="pekerjaan_suami" value="<?php echo $row['pekerjaan_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>Status Suami</b></td>
            <td>: 
            <input type="text" name="status_suami" value="<?php echo $row['status_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>Alamat Email Suami</b></td>
            <td>: 
            <input type="text" name="email_suami" value="<?php echo $row['email_suami']?>" ></td>
        </tr>
        <tr>
            <td><b>No. Telepon Suami</b></td>
            <td>: 
            <input type="text" name="no_telp_suami" value="<?php echo $row['no_telp_suami']?>" ></td>
        </tr>


        <tr tr height="40">
        </tr>

        <tr>
            <td><b>Nama Istri</b></td>
            <td>: 
            <input type="text" name="nama_istri" value="<?php echo $row['nama_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>NIK Istri</b></td>
            <td>: 
            <input type="text" name="nik_istri" value="<?php echo $row['nik_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>TTL Istri</b></td>
            <td>: 
            <input type="text" name="tempat_lahir_istri" value="<?php echo $row['tempat_lahir_istri']?>">, 
            <input type="date" name="tanggal_lahir_istri" value="<?php echo $row['tanggal_lahir_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>Alamat Istri</b></td>
            <td>: 
            <input type="text" name="alamat_istri" value="<?php echo $row['alamat_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>Kewarganegaraan Istri</b></td>
            <td>: 
            <input type="text" name="kewarganegaraan_istri" value="<?php echo $row['kewarganegaraan_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>Agama Istri</b></td>
            <td>: 
            <input type="text" name="">
            <input type="text" name="agama_istri" value="<?php echo $row['agama_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>Pekerjaan Istri</b></td>
            <td>: 
            <input type="text" name="pekerjaan_istri" value="<?php echo $row['pekerjaan_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>Status Istri</b></td>
            <td>: 
            <input type="text" name="status_istri" value="<?php echo $row['status_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>Alamat Email Istri</b></td>
            <td>: 
            <input type="text" name="email_istri" value="<?php echo $row['email_istri']?>" ></td>
        </tr>
        <tr>
            <td><b>No. Telepon Istri</b></td>
            <td>: 
            <input type="text" name="no_telp_istri" value="<?php echo $row['no_telp_istri']?>">     </td>                   
        </tr>

       
        <?php endwhile; 
		?>

    </table>
    <button class="btn btn-primary">Update</button>
    </form>
    <a href="datamasuk.php" class="btn btn-success" role="button">Kembali</a>
    </div>
    </div>
	</section>
</body>
</html>