<?php 
include '../config.php';

$Tgl_Trsk = $_POST['Tgl_Trsk'];
$Id_Cust = $_POST['Id_Cust'];
$Id_Kendaraan = $_POST['Id_Kendaraan'];
$Harga_Jual = $_POST['Harga_Jual'];
$Harga_Jual_Real = $_POST['Harga_Jual_Real'];

mysqli_query($koneksi,"UPDATE transaksi SET Tgl_Trsk='$Tgl_Trsk', Id_Cust='$Id_Cust', Id_Kendaraan='$Id_Cust', Harga_Jual='$Harga_Jual', Harga_Jual_Real='$Harga_Jual_Real' WHERE IdTrsk = $_POST[IdTrsk]");

header("location:index.php");
 
?>