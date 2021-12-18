<?php
				session_start();
				 
				if( isset($_SESSION['akses']) )
				{
				    header('location:'.$_SESSION['akses']);
				    exit();
				}
				 
				$error = '';
				if( isset($_SESSION['error']) ) {
				 
				    $error = $_SESSION['error']; // set error
				 
				    unset($_SESSION['error']);
			} ?>
			 
			<?php echo $error;?>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<!-- cek pesan notifikasi -->
	
	<br/>
	<br/>
	<div class="container">

		<div class="row">
			<div class="col-sm"></div>
			<div class="col-sm">
			
				<div class="alert alert-success">
					<form action="check-login.php" method="post">
					  	<div class="form-group">
					  		<h2>Login</h2>
					    	<label for="exampleInputEmail1">Username</label>
					    	<input type="Nama" name="Nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
					  	</div>
					  	<div class="form-group mt-3">
					    	<label for="exampleInputPassword1">Password</label>
					    	<input type="Password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  	</div>
					  	<div class="row">
					  		<div class="col-sm mt-3">
					  			<button type="submit" class="btn btn-primary">Submit</button>
					  		</div>
					  	</div>
					</form>
				</div>
			</div>
			<div class="col-sm"></div>
		</div
	</div>