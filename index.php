<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Monitoring Pokcoy</title>
  
  <link rel="icon" type="image/png" href="dist/img/icon.jpg"/>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="dist/img/leaf.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Pokcoy</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">


      </div>


    </div>
  </nav>


  <div class="content-wrapper">
    <div class="content-header">
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
			<div class="col-md-8">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">
							Data Monitoring
						</h3>
					</div>
					<div class="card-body text-sm table-responsive">
						<table class="table table-striped">
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Jam</th>
								<th>Klorofil</th>
								<th>Kadar Air</th>
								<th>Luas (CM)</th>
								<th>Pixel Daun</th>
								<th>Pixel Total</th>
							</tr>
<?php
	include "db.php";
	$no=1;
	$q = mysqli_query($con,"SELECT * FROM pertumbuhan ORDER BY id DESC LIMIT 30");
	while($r=mysqli_fetch_array($q)) {
		echo"
							<tr>
								<td>$no</td>
								<td>$r[tanggal]</td>
								<td>$r[jam]</td>
								<td>$r[klorofil]</td>
								<td>$r[kadar_air]</td>
								<td>$r[luas]</td>
								<td>$r[pixel_daun]</td>
								<td>$r[pixel_total]</td>
							</tr>
		";
		$no++;
	}
?>
						</table>
														
					</div>
					<div class="card-footer text-xs">
						Data diambil setiap hari pukul 09.00 WIB.
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body text-center">
						<img src="dist/img/leaf.jpg" alt="foto profil" class="profile-user-img img-fluid img-circle">
						<h3>Jihan</h3>
						<p>Sistem Monitoring Tanamana Pokcoy merupakan skripsi dari Mahasiswa Pertanian Universitas Padjajaran</p>
					</div>
				</div>
			</div>
        </div>
      </div>
    </div>
  </div>


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Jihan
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="#">Monitoring Pokcoy</a>.</strong> All rights reserved.
  </footer>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
