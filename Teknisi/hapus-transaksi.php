<?php 
include '../config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM transaksi WHERE IdTransaksi ='$id'");

header("location:index.php");
?>