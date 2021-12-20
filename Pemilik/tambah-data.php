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
if($Gambar_Motor != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $Gambar_Motor); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['Gambar_Motor']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$Gambar_Motor; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, '../img/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO identitas_motor (NoRegistrasi, NamaPemilik, Alamat, NoRangka, NoMesin, PlatNO, Merk, Type, Model, TahunPembuatan, IsiSilinder, BahanBakar, WarnaTNKB, TahunRegistrasi, NoBPKB, KodeLokasi, MasaBerlakuSTNK, Gambar_Motor, Tgl_Beli, Harga_Beli, Tgl_Jual, Harga_Jual) 
				  VALUES ('$NoRegistrasi','$NamaPemilik','$Alamat','$NoRangka','$NoMesin','$PlatNO','$Merk','$Type','$Model','$TahunPembuatan','$IsiSilinder','$BahanBakar','$WarnaTNKB','$TahunRegistrasi','$NoBPKB','$KodeLokasi','$MasaBerlakuSTNK','$nama_gambar_baru','$Tgl_Beli','$Harga_Beli','$Tgl_Jual','$Harga_Jual')";
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
   $query = "INSERT INTO identitas_motor (NoRegistrasi, NamaPemilik, Alamat, NoRangka, NoMesin, PlatNO, Merk, Type, Model, TahunPembuatan, IsiSilinder, BahanBakar, WarnaTNKB, TahunRegistrasi, NoBPKB, KodeLokasi, MasaBerlakuSTNK, Gambar_Motor, Tgl_Beli, Harga_Beli, Tgl_Jual, Harga_Jual) 
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
}