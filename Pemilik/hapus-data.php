<?php 
include '../config.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM identitas_motor WHERE ID ='$id'");

header("location:index.php");
?>