<?php
session_start();
 
if( !isset($_SESSION['saya_teller']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
 
$Nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
?>
<h1>Halaman Teller <span style="color:red"><?php echo $Nama;?></span></h1>


<!DOCTYPE html>
<html>
<head>
	<title>Motor Bekas</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	
	<!-- Navbar -->
	<nav class="navbar navbar-dark bg-secondary flex-md-nowrap p-2 shadow col-12">
  		<div class="container-fluid">
  			<a class="navbar-brand h1">
  				<img src="../assets/motorcycle.png" width="25">
  				<span class="navbar-brand mb-0 h1">Jual Motor Bekas</span>
            </a>
  		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-2 d-none d-md-block bg-light sidebar" style="height: 100vh">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item mt-3">
							<h3 style="padding-left: 19px">Selamat Datang, <?php echo $_SESSION['nama_user']; ?></h3>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link" href="index.php">
								<img src="../assets/bars-graphic-business-symbol.png" width="20" height="20" class="d-inline-block align-top"> Dashboard
							</a>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link" href="form-tambah-user.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Tambah Data User
							</a>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link" href="user.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Data User
							</a>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link" href="transaksi.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Menu Transaksi
							</a>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link" href="../logout.php">
								<img src="../assets/logout.png" width="20" height="20" class="d-inline-block align-top"> Logout
							</a>
						</li>
					</ul>
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-5 mb-1 text-muted">
				</div>
			</div>
			<!-- Content -->
			<div class="col-10">
				<div class="container-fluid mt-3">
					<h1>Data Motor</h1>
					<div class="dropdown-divider"></div>
					<!-- Tabel Pasien -->
					<div class="car mt-3">
						<!-- Header -->
						<div class="card-header bg-light text-dark">
							<h5 class="text-center">Daftar Identitas Motor</h5>
						</div>
						<!-- Body -->
						<div class="card-body">
							<table class="table table-bordered table-striped">
								<tr>
									<th class="text-center">No.</th>
				                    <th class="text-center">No Registrasi</th>
									<th class="text-center">Nama Pemilik</th>
									<th class="text-center">Alamat</th>
									<th class="text-center">No Rangka</th>
									<th class="text-center">No Mesin</th>
									<th class="text-center">Plat Nomor</th>
				                    <th class="text-center">Merk</th>
				                    <th class="text-center">Type</th>

								</tr>
                        
                                

								<?php
								include '../config.php';
					  			$no = 1;
					  			$query = mysqli_query($koneksi, "SELECT * from identitas_motor ORDER BY ID DESC");
					  			while ($data = mysqli_fetch_array($query)) {
					  		 ?>
								<tr>
									<td><?=$no++;?></td>
									<td><?=$data['NoRegistrasi']?></td>
									<td><?=$data['NamaPemilik']?></td>
		                            <td><?=$data['Alamat']?></td>
		                            <td><?=$data['NoRangka']?></td>
		                            <td><?=$data['NoMesin']?></td>
		                            <td><?=$data['PlatNO']?></td>
		                            <td><?=$data['Merk']?></td>
		                            <td><?=$data['Type']?></td>
		                            
						  			
								</tr>
                                
							<?php };?>
							</table>
						</div>
                        <div class="card-body">
							<table class="table table-bordered table-striped">
                            <tr>
                                    <th class="text-center">Model</th>
				                    <th class="text-center">Tahun Pembuatan</th>
				                    <th class="text-center">Isi Silinder</th>
				                    <th char="text-center">Bahan Bakar</th>
				                    <th class="text-center">Warna TNKB</th>
				                    <th class="text-center">Tahun Registrasi</th>
				                    <th class="text-center">No BPKB</th>
				                    <th class="text-center">Kode Lokasi</th>
				                    <th class="text-center">Masa Berlaku STNK</th>
                                </tr>
                                <?php
								include '../config.php';
					  			$no = 1;
					  			$query = mysqli_query($koneksi, "SELECT * from identitas_motor ORDER BY ID DESC");
					  			while ($data = mysqli_fetch_array($query)) {
					  		 ?>
								
                                <tr>
                                <td><?=$data['Model']?></td>
		                            <td><?=$data['TahunPembuatan']?></td>
		                            <td><?=$data['IsiSilinder']?></td>
		                            <td><?=$data['BahanBakar']?></td>
		                            <td><?=$data['WarnaTNKB']?></td>
		                            <td><?=$data['TahunRegistrasi']?></td>
		                            <td><?=$data['NoBPKB']?></td>
		                            <td><?=$data['KodeLokasi']?></td>
		                            <td><?=$data['MasaBerlakuSTNK']?></td>
                                </tr>
							<?php };?>
                                </table>
                        </div>
						<div class="card-body">
							<table class="table table-bordered table-striped">
								<tr>
				                    <th class="text-center">Gambar Motor</th>
									<th class="text-center">Tgl Beli</th>
									<th class="text-center">Harga Beli</th>
									<th class="text-center">Tgl Jual</th>
									<th class="text-center">Harga Jual</th>
                                    <th class="text-center" width=120px >Aksi</th>

								</tr>
								<?php
								include '../config.php';
					  			$no = 1;
					  			$query = mysqli_query($koneksi, "SELECT * from identitas_motor ORDER BY ID DESC");
					  			while ($data = mysqli_fetch_array($query)) {
					  		 ?>
								<tr>
									<td class="text-center"><img src="../img/<?php echo $data['Gambar_Motor']; ?>" style="width: 300px;"></td>
									<td><?=$data['Tgl_Beli']?></td>
		                            <td><?=$data['Harga_Beli']?></td>
		                            <td><?=$data['Tgl_Jual']?></td>
		                            <td><?=$data['Harga_Jual']?></td>
		                            <td>
						  				<a href="form-edit-data.php?id=<?php echo $data['ID']; ?>" class="btn btn-success">
						  				<img src="../assets/edit.png" width="15" height="18" class="d-inline-block align-middle"></a>
						  				<a href="hapus-data.php?id=<?php echo $data['ID'];?>" class="btn btn-danger ml-2">
						  				<img src="../assets/delete.png" width="15" height="18" class="d-inline-block align-middle"></a>
						  			</td>
								</tr>
                                
							<?php };?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>