<?php
// include database connection file
include 'koneksi.php';
$nim= $_POST['nim'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jabatan=$_POST['jabatan'];
$result = mysqli_query($koneksi, "UPDATE dosen SET
nama='$nama',alamat='$alamat',jabatan='$jabatan' WHERE nim='$nim'");
// Redirect to homepage to display updated user in list
header("Location: dosen.php");
?>