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
  			<span class="navbar-brand mb-0 h1">Form Edit Data</span>
  		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-2 d-none d-md-block sidebar" style="background-color: #a3c1ad;" >
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
							<a class="nav-link text-white" href="form-tambah-data.php">
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
					<h1>Edit Data</h1>
					<div class="dropdown-divider"></div>
					<!-- Form jadwal -->
					<div class="card mt-3">
					<div class="card-header text-white" style="background-color: #a3c1ad;">
							Form Edit Data
						</div>
						<div class="card-body">
							<?php
							include '../config.php';	
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"SELECT * FROM identitas_motor WHERE ID ='$id'");
							while($d = mysqli_fetch_array($data)){
							?>
							<form method="post" action="edit-data.php" enctype="multipart/form-data">
								
								<div class="form-group">
									<label>ID</label>
									<input type="text" name="ID" placeholder= "ID" value="<?php echo $d['ID'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Nomor Registrasi</label>
									<input type="text" name="NoRegistrasi" value="<?php echo $d['NoRegistrasi'];?>" placeholder="Nomor Registrasi" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Nama Pemilik</label>
									<input type="text" name="NamaPemilik" placeholder=" Nama Pemilik" value="<?php echo $d['NamaPemilik'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="Alamat" placeholder="Alamat" value="<?php echo $d['Alamat'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>No Rangka</label>
									<input type="text" name="NoRangka" placeholder="No Rangka" value="<?php echo $d['NoRangka'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>No Mesin</label>
									<input type="text" name="NoMesin" placeholder="No Mesin" value="<?php echo $d['NoMesin'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Plat Nomor</label>
									<input type="text" name="PlatNO" placeholder="Plat Nomor" value="<?php echo $d['PlatNO'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Merek</label>
									<input type="text" name="Merk" placeholder="Merk" value="<?php echo $d['Merk'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Type</label>
									<input type="text" name="Type" placeholder="Type" value="<?php echo $d['Type'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Model</label>
									<input type="text" name="Model" placeholder="Model" value="<?php echo $d['Model'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Tahun Pembuatan</label>
									<input type="text" name="TahunPembuatan" placeholder="Tahun Pembuatan" value="<?php echo $d['TahunPembuatan'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Isi Silinder</label>
									<input type="text" name="IsiSilinder" placeholder="Isi Silinder" value="<?php echo $d['IsiSilinder'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Bahan Bakar</label>
									<input type="text" name="BahanBakar" placeholder="Bahan Bakar" value="<?php echo $d['BahanBakar'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Warna TNKB</label>
									<input type="text" name="WarnaTNKB" placeholder="Warna TNKB" value="<?php echo $d['WarnaTNKB'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Tahun Registrasi</label>
									<input type="text" name="TahunRegistrasi" placeholder="Tahun Registrasi" value="<?php echo $d['TahunRegistrasi'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>No BPKB</label>
									<input type="text" name="NoBPKB" placeholder="No BPKB" value="<?php echo $d['NoBPKB'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Kode Lokasi</label>
									<input type="text" name="KodeLokasi" placeholder="Kode Lokasi" value="<?php echo $d['KodeLokasi'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Masa Berlaku STNK</label>
									<input type="text" name="MasaBerlakuSTNK" placeholder="Masa Berlaku STNK" value="<?php echo $d['MasaBerlakuSTNK'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Gambar Motor</label>
									<input type="file" name="Gambar_Motor" placeholder="Gambar Motor" value="<?php echo $d['Gambar_Motor'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Tgl Beli</label>
									<input type="date" name="Tgl_Beli" placeholder="Tgl Beli" value="<?php echo $d['Tgl_Beli'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Harga Beli</label>
									<input type="text" name="Harga_Beli" placeholder="Harga Beli" value="<?php echo $d['Harga_Beli'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Tgl Jual</label>
									<input type="date" name="Tgl_Jual" placeholder="Tgl Jual" value="<?php echo $d['Tgl_Jual'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Harga Jual</label>
									<input type="text" name="Harga_Jual" placeholder="Harga Jual" value="<?php echo $d['Harga_Jual'];?>" class="form-control" required="">
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