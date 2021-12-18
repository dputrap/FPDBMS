<?php 
include '../config.php';

$Tgl_Trsk = $_POST['Tgl_Trsk'];
$Id_Cust = $_POST['Id_Cust'];
$Id_Kendaraan = $_POST['Id_Kendaraan'];
$Harga_Jual = $_POST['Harga_Jual'];
$Harga_Jual_Real = $_POST['Harga_Jual_Real'];

mysqli_query($koneksi, "INSERT INTO transaksi VALUES('','$Tgl_Trsk','$Id_Cust','$Id_Kendaraan','$Harga_Jual','$Harga_Jual_Real')");

header("location:index.php");
 
?>