<?php 
include '../config.php';

$Nama = $_POST['Nama'];
$Password = $_POST['Password'];
$Hak_Akses = $_POST['Hak_Akses'];
$Create_Date = $_POST['Create_Date'];
$Manager = $_POST['Manager'];



mysqli_query($koneksi,"UPDATE user SET Nama='$Nama', Password='$Password', Hak_Akses='$Hak_Akses', Create_Date='$Create_Date', Manager='$Manager' WHERE IDUser = $_POST[IDUser]");

header("location:index.php");
 
?>