<?php
session_start();
 
if( !isset($_SESSION['nama_user']) )
{
    header('location:./../'.$_SESSION['akses']);
    exit();
}else{
    $Nama = $_SESSION['nama_user'];
}
 
?>
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
						<li class="nav-item mt-2">
							<a class="nav-link" href="../logout.php">
								<img src="../assets/logout.png" width="20" height="20" class="d-inline-block align-top"> Logout
							</a>
						</li>
					</ul>
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-2 mt-5 mb-1 text-muted">
				</div>
			</div>
            <!--Menu Galeri-->
            <div class="col-10">
				<div class="container-fluid mt-3">
					<h1>Menu Galeri</h1>
					
					<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../config.php';

	// membuat variabel untuk menampung data dari form
	$NoRegistrasi = $_POST['NoRegistrasi'];
	$NamaPemilik = $_POST['NamaPemilik'];
	$Alamat = $_POST['Alamat'];
	$NoRangka = $_POST['NoRangka'];
	$NoMesin = $_POST['NoMesin'];
	$PlatNO = $_POST['PlatNO'];
	$Merk = $_POST['Merk'];
	$Type = $_POST['Type'];
	$Model = $_POST['Model'];
	$TahunPembuatan = $_POST['TahunPembuatan'];
	$IsiSilinder = $_POST['IsiSilinder'];
	$BahanBakar = $_POST['BahanBakar'];
	$WarnaTNKB = $_POST['WarnaTNKB'];
	$TahunRegistrasi = $_POST['TahunRegistrasi'];
	$NoBPKB = $_POST['NoBPKB'];
	$KodeLokasi = $_POST['KodeLokasi'];
	$MasaBerlakuSTNK = $_POST['MasaBerlakuSTNK'];
	$Gambar_Motor = $_FILES['Gambar_Motor']['name'];
	$Tgl_Beli = $_POST['Tgl_Beli'];
	$Harga_Beli = $_POST['Harga_Beli'];
	$Tgl_Jual = $_POST['Tgl_Jual'];
	$Harga_Jual = $_POST['Harga_Jual'];


//cek dulu jika ada gambar produk jalankan coding ini
if($gambar_produk != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $Gambar_Motor); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['Gambar_Motor']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$Gambar_Motor; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO identitas_motor (NoRegistrasi, NamaPemilik, Alamat, NoRangka, NoMesin, PlatNO, Merk, Type, Model, TahunPembuatan, IsiSilinder, BahanBakar, WarnaTNKB, TahunRegistrasi, NoBPKN, KodeLokasi, MasaBerlakuSTNK, Gambar_Motor, Tgl_Beli, Harga_Beli, Tgl_Jual, Harga_Jual) 
				  VALUES ('','$NoRegistrasi','$NamaPemilik','$Alamat','$NoRangka','$NoMesin','$PlatNO','$Merk','$Type','$Model','$TahunPembuatan','$IsiSilinder','$BahanBakar','$WarnaTNKB','$TahunRegistrasi','$NoBPKB','$KodeLokasi','$MasaBerlakuSTNK','$Gambar_Motor','$Tgl_Beli','$Harga_Beli','$Tgl_Jual','$Harga_Jual')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
            }
} else {
   $query = "INSERT INTO produk (nama_produk, deskripsi, harga_beli, harga_jual, gambar_produk) VALUES ('$nama_produk', '$deskripsi', '$harga_beli', '$harga_jual', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}
