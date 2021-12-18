<?php 
include '../config.php';

$Nama = $_POST['Nama'];
$Password = $_POST['Password'];
$Hak_Akses = $_POST['Hak_Akses'];
$Create_Date = $_POST['Create_Date'];
$Manager = $_POST['Manager'];



mysqli_query($koneksi, "INSERT INTO user VALUES('','$Nama','$Password','$Hak_Akses','$Create_Date','$Manager')");

header("location:index.php");
 
?>