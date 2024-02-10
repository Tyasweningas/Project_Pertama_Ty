<?php
// include database connection file
include 'koneksi.php';
$hari= $_POST['hari'];
$pengajar=$_POST['pengajar'];
$matkul=$_POST['matkul'];
$ruang=$_POST['ruang'];
$result = mysqli_query($koneksi, "UPDATE jadwal SET
pengajar='$pengajar',matkul='$matkul',ruang='$ruang' WHERE hari='$hari'");
// Redirect to homepage to display updated user in list
header("Location: jadwal.php");
?>