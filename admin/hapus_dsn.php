<?php
// include database connection file
include 'koneksi.php';
$nim = $_GET['nim'];
$result = mysqli_query($koneksi, "DELETE FROM dosen WHERE nim='$nim'");
    header("Location:dosen.php");
?>