<!DOCTYPE html>
<html>
<head>
	<title>Penjualan Motor</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-light flex-md-nowrap p-2 shadow" style="background-color: #669999;">
  		<div class="container-fluid">
  			<a href="transaksi.php"><span class="navbar-brand mb-0 h1">Penjualan Motor</span></a>
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
							<a class="nav-link text-white" href="form-tambah-user.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Tambah Transaksi
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
					<h1>Input Transaksi</h1>
					<div class="dropdown-divider"></div>
					<!-- Form jadwal -->
					<div class="card mt-3">
						<div class="card-header text-white" style="background-color: #a3c1ad;">
							Form Tambah Transaksi
						</div>
						<div class="card-body">
							<form method="post" action="tambah-transaksi.php">
								<div class="form-group">
									<label>Tgl Transaksi</label>
									<input type="date" name="Tgl_Trsk" placeholder="Tgl_Trsk" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Id Customer</label>
									<input type="text" name="Id_Cust" placeholder="Id_Cust" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Id Kendaraan</label>
									<input type="text" name="Id_Kendaraan" placeholder="Id_Kendaraan" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Harga Jual</label>
									<input type="text" name="Harga_Jual" placeholder="Harga_Jual" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Harga Jual Real</label>
									<input type="text" name="Harga_Jual_Real" placeholder="Harga_Jual_Real" class="form-control" required="">
								</div>
								<button type="submit" class="btn btn-success mt-3" name="bsimpan">Simpan</button>
							</form>
							<?php 
							
							if(isset($_GET['pesan'])){
								$pesan = $_GET['pesan'];
								if($pesan == "input"){
									echo "Data berhasil di input.";
								}else if($pesan == "update"){
									echo "Data berhasil di update.";
								}else if($pesan == "hapus"){
									echo "Data berhasil di hapus.";
								}
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