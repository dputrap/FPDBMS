<?php
session_start();
 
if( !isset($_SESSION['saya_admin']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}
 
$Nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Motor Bekas</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>


	<!-- Navbar -->
	<nav class="navbar navbar-light flex-md-nowrap p-2 shadow col-12" style="background-color: #669999;">
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
			<div class="col-md-2 d-none d-md-block sidebar" style="background-color: #a3c1ad;">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item mt-3">
						<h3 style="padding-left: 19px">Selamat Datang, <?php echo $_SESSION['nama_user']; ?></h3>
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
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Tambah User
							</a>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link text-white" href="form-edit-user.php">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Data User
							</a>
						</li>
						<div class="dropdown-divider"></div>
						<li class="nav-item mt-2">
							<a class="nav-link text-white" href="../logout.php">
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
						<div class="card-header text-white" style="background-color: #a3c1ad;">
							<h5 class="text-center">Daftar User</h5>
						</div>
						<!-- Body -->
						<div class="card-body">
							<table class="table table-bordered table-striped">
								<tr>
									<th class="text-center">No.</th>
				                    <th class="text-center">Nama</th>
									<th class="text-center">Password</th>
									<th class="text-center">Hak_Akses</th>
									<th class="text-center">Create_Date</th>
									<th class="text-center">Manager</th>
				                    <th class="text-center">Aksi</th>
								</tr>
								<?php
								include '../config.php';
					  			$no = 1;
					  			$query = mysqli_query($koneksi, "SELECT * from user ORDER BY IDUser DESC");
					  			while ($data = mysqli_fetch_array($query)) {
					  		 ?>
								<tr>
									<td><?=$no++;?></td>
									<td><?=$data['Nama']?></td>
									<td><?=$data['Password']?></td>
		                            <td><?=$data['Hak_Akses']?></td>
		                            <td><?=$data['Create_Date']?></td>
		                            <td><?=$data['Manager']?></td>
						  			<td>
									  	<a href="form-edit-user.php?id=<?php echo $data['IDUser']; ?>" class="btn btn-success">
						  				<img src="../assets/edit.png" width="15" height="18" class="d-inline-block align-middle"></a>
						  				<a href="hapus-user.php?id=<?php echo $data['IDUser'];?>" class="btn btn-danger ml-2">
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