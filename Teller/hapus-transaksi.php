<?php 
include '../config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM transaksi WHERE IdTrsk ='$id'");

header("location:index.php");
?>