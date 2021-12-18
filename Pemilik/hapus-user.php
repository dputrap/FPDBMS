<?php 
include '../config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM user WHERE IDUser ='$id'");

header("location:index.php");
?>