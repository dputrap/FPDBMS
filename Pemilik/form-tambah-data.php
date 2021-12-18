<!DOCTYPE html>
<html>
<head>
	<title>Penjualan Motor</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-dark bg-secondary flex-md-nowrap p-2 shadow">
  		<div class="container-fluid">
  			<span class="navbar-brand mb-0 h1">Penjualan Motor</span>
  		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-2 d-none d-md-block bg-light sidebar" style="height: 100vh">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item mt-3">
							<h3 style="padding-left: 19px">Admin</h3>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link" href="index.php">
								<img src="../assets/bars-graphic-business-symbol.png" width="20" height="20" class="d-inline-block align-top"> Dashboard
							</a>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link" href="form-tambah-data.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Tambah Data
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
					<h1>Input Data</h1>
					<div class="dropdown-divider"></div>
					<!-- Form jadwal -->
					<div class="card mt-3">
						<div class="card-header bg-secondary text-white">
							Form Tambah Data
						</div>
						<div class="card-body">
							<form method="post" action="tambah-data.php" enctype="multipart/form-data">
								<div class="form-group">
									<label>Nomor Registrasi</label>
									<input type="text" name="NoRegistrasi" placeholder="Nomor Registrasi" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Nama Pemilik</label>
									<input type="text" name="NamaPemilik" placeholder="Nama Lengkap" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="Alamat" placeholder="Alamat" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Nomor Rangka</label>
									<input type="text" name="NoRangka" placeholder="Nomor Rangka" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Nomor Mesin</label>
									<input type="text" name="NoMesin" placeholder="Nomor Mesin" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Plat Nomor</label>
									<input type="text" name="PlatNO" placeholder="Plat Nomor" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Merk</label>
									<input type="text" name="Merk" placeholder="Merk" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Type</label>
									<input type="text" name="Type" placeholder="Type" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Model</label>
									<input type="text" name="Model" placeholder="Model" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Tahun Pembuatan</label>
									<input type="text" name="TahunPembuatan" placeholder="Tahun Pembuatan" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Isi Silinder</label>
									<input type="text" name="IsiSilinder" placeholder="Isi Silinder" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Bahan Bakar</label>
									<input type="text" name="BahanBakar" placeholder="Bahan Bakar" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Warna TNKB</label>
									<input type="text" name="WarnaTNKB" placeholder="Warna TNKB" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Tahun Registrasi</label>
									<input type="text" name="TahunRegistrasi" placeholder="Tahun Registrasi" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>No BPKB</label>
									<input type="text" name="NoBPKB" placeholder="No BKPB" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Kode Lokasi</label>
									<input type="text" name="KodeLokasi" placeholder="Kode Lokasi" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Masa Berlaku STNK</label>
									<input type="text" name="MasaBerlakuSTNK" placeholder="Masa Berlaku STNK" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Gambar Motor</label>
									<input type="file" name="Gambar_Motor" placeholder="Gambar Motor" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Tgl Beli</label>
									<input type="date" name="Tgl_Beli" placeholder="Tahun Registrasi" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Harga_Beli</label>
									<input type="text" name="Harga_Beli" placeholder="No BKPB" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Tgl Jual</label>
									<input type="date" name="Tgl_Jual" placeholder="Tgl Jual" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Harga Jual</label>
									<input type="text" name="Harga_Jual" placeholder="Harga Jual" class="form-control" required="">
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