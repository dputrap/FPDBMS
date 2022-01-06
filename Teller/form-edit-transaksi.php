<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-light flex-md-nowrap p-2 shadow" style="background-color: #669999;">
  		<div class="container-fluid">
  			<a href="transaksi.php"><span class="navbar-brand mb-0 h1">Form Edit Data</span></a>
  		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-2 d-none d-md-block sidebar" style="background-color: #a3c1ad;">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item mt-3">
							<h3 style="padding-left: 19px">Admin</h3>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link text-white" href="index.php">
								<img src="../assets/bars-graphic-business-symbol.png" width="20" height="20" class="d-inline-block align-top"> Dashboard
							</a>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link text-white" href="form-edit-transaksi.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Edit Transaksi
							</a>
						</li>
						<div class="dropdown-divider"></div>
					</ul>
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-5 mb-1 text-muted">
				</div>
			</div>
			<!-- Content -->
			<div class="col-10">
				<div class="container-fluid mt-3">
					<h1>Edit Transaksi</h1>
					<div class="dropdown-divider"></div>
					<!-- Form jadwal -->
					<div class="card mt-3">
						<div class="card-header text-white" style="background-color: #a3c1ad;">
							Form Edit Transaksi
						</div>
						<div class="card-body">
							<?php
							include '../config.php';	
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE IdTrsk ='$id'");
							while($d = mysqli_fetch_array($data)){
							?>
							<form method="post" action="edit-transaksi.php">

                            <div class="form-group">
									<label>Tgl Transaksi</label>
									<input type="date" name="Tgl_Trsk" placeholder="Tanggal Transaksi" value="<?php echo $d['Tgl_Trsk'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Id Customer</label>
									<input type="text" name="Id_Cust" placeholder="Customer" value="<?php echo $d['Id_Cust'];?>" class="form-control" required="">
								</div>
								<label>Id Kendaraan</label>
									<input type="text" name="Id_Kendaraan" placeholder="Id Kendaraan" value="<?php echo $d['Id_Kendaraan'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Harga Jual</label>
									<input type="text" name="Harga_Jual" placeholder="Harg Jual" value="<?php echo $d['Harga_Jual'];?>" class="form-control" required="">
								</div>
								<label>Harga Jual Real</label>
									<input type="text" name="Harga_Jual_Real" placeholder="Harga Jual Real" value="<?php echo $d['Harga_Jual_Real'];?>" class="form-control" required="">
								</div>								
								<button type="submit" class="btn btn-success mt-3" name="bsimpan">Simpan</button>
							</form>
							<?php 
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>