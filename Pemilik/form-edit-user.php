<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-dark bg-secondary flex-md-nowrap p-2 shadow">
  		<div class="container-fluid">
  			<span class="navbar-brand mb-0 h1">Form Edit Data</span>
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
							<a class="nav-link" href="">
								<img src="../assets/add-interface-circular-symbol-with-plus-sign.png" width="20" height="20" class="d-inline-block align-top"> Edit User
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
					<h1>Edit <i class="fas fa-database    "></i></h1>
					<div class="dropdown-divider"></div>
					<!-- Form jadwal -->
					<div class="card mt-3">
						<div class="card-header bg-secondary text-white">
							Form Edit Data
						</div>
						<div class="card-body">
							<?php
							include '../config.php';	
							$id = $_GET['id'];
							$data = mysqli_query($koneksi,"SELECT * FROM user WHERE IDUser ='$id'");
							while($d = mysqli_fetch_array($data)){
							?>
							<form method="post" action="edit-user.php">
								
								<div class="form-group">
									<label>ID</label>
									<input type="text" name="IDUser" placeholder= "ID" value="<?php echo $d['IDUser'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Nama</label>
									<input type="text" name="Nama" value="<?php echo $d['Nama'];?>" placeholder="Nama" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="text" name="Password" placeholder="Password" value="<?php echo $d['Password'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Hak_Akses</label>
									<input type="text" name="Hak_Akses" placeholder="Hak_Akses" value="<?php echo $d['Hak_Akses'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Create_Date</label>
									<input type="text" name="Create_Date" placeholder="Create_Date" value="<?php echo $d['Create_Date'];?>" class="form-control" required="">
								</div>
								<div class="form-group">
									<label>Manager</label>
									<input type="text" name="Manager" placeholder="Manager" value="<?php echo $d['Manager'];?>" class="form-control" required="">
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