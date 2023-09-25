<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'kuaproyek'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT *
		FROM pendaftaran ORDER BY id DESC';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>



<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin Kantor Urusan Agama Kabupaten Jombang</title>
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

		<!-- Header -->
			<header id="header">
				<nav id="nav">
                    <ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="datamasuk.php">Data Masuk</a></li>
						<li><a href="datapengguna.php">Data Pengguna</a></li>
						<li><a href="saran_kritik.php">Saran dan Kritik</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			 <section id="main" class="wrapper">
				<div class="container">
				     <div class="table-responsive">
						<h1> Data Masuk </h1><br>
						<table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
											<th>No.</th>
                                            <th>Tanggal Daftar</th>
                                            <th>Nama Calon Suami</th>
                                            <th>NIK Calon Suami</th>
                                            <th>Nama Calon Istri</th>
                                            <th>NIK Calon Istri</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead> 

               
<?php
$no = 1;
while($row=mysqli_fetch_assoc($query)):
		?>
      <tr>
	  <td><?php echo $no ?></td>
            <td><?php echo $row["tanggal_daftar"]; ?></td>
            <td><?php echo $row["nama_suami"];?></td>
            <td><?php echo $row["nik_suami"];?></td>
            <td><?php echo $row["nama_istri"];?></td>
            <td><?php echo $row["nik_istri"];?></td>
			</td>
			<td>
				<center>
				<a href="detail.php?id=<?=$row['id']?>" class="btn btn-success" role="button">Detail</a>
				</center>
            </td>
	  </tr>
	  <?php $no++; ?>
<?php endwhile; 
		?>
                     </table>
                 </div>
            </div>
		</section>
	</body>
</html>