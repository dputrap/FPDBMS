<?php
session_start();
 
if( !isset($_SESSION['saya_teller']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
 
$Nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
?>
<!DOCTYPE html>
<style>
	body{
		background-image: url(../assets/road.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
  		background-size: cover;
	}
	</style>
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
							<a class="nav-link" href="form-tambah-transaksi.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Tambah Transaksi
							</a>
						</li>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link" href="galeri.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Galeri
							</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" href="logout.php">
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
					<h1>Data User</h1>
					<div class="dropdown-divider"></div>
					<!-- Tabel Pasien -->
					<div class="car mt-3">
						<!-- Header -->
						<div class="card-header bg-light text-dark">
							<h5 class="text-center">Daftar User</h5>
						</div>
						<!-- Body -->
						<div class="card-body">
							<table class="table table-bordered table-striped">
								<tr>
									<th class="text-center">No.</th>
				                    <th class="text-center">IdTrsk</th>
									<th class="text-center">Tgl Transaksi</th>
									<th class="text-center">Id Customer</th>
									<th class="text-center">Id Kendaraan</th>
									<th class="text-center">Harga Jual</th>
									<th class="text-center">Harga Jual Real</th>
				                    <th class="text-center">Aksi</th>
								</tr>
								<?php
								include '../config.php';
					  			$no = 1;
					  			$query = mysqli_query($koneksi, "SELECT * from transaksi ORDER BY Tgl_Trsk DESC");
					  			while ($data = mysqli_fetch_array($query)) {
					  		 	?>
								<tr>
									<td><?=$no++;?></td>
									<td><?=$data['IdTrsk']?></td>
									<td><?=$data['Tgl_Trsk']?></td>
		                            <td><?=$data['Id_Cust']?></td>
									<td><?=$data['Id_Kendaraan']?></td>
									<td><?=$data['Harga_Jual']?></td>
		                            <td><?=$data['Harga_Jual_Real']?></td>
						  			<td>
										<div class="btn-group">  
									  	<a href="form-edit-transaksi.php?id=<?php echo $data['IdTrsk']; ?>" class="btn btn-success">
						  				<img src="../assets/edit.png" width="15" height="18" class="d-inline-block align-middle"></a>
						  				<a href="hapus-transaksi.php?id=<?php echo $data['IdTrsk'];?>" class="btn btn-danger ml-2">
						  				<img src="../assets/delete.png" width="15" height="18" class="d-inline-block align-middle"></a>
								  		</div>	
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