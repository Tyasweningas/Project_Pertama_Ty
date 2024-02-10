<?php
include 'koneksi.php';
$hari = $_POST['hari'];
$pengajar = $_POST['pengajar'];
$matkul= $_POST['matkul'];
$ruang = $_POST['ruang'];
$input = mysqli_query($koneksi, "INSERT INTO jadwal
VALUES('$hari','$pengajar','$matkul','$ruang')") or die(mysqli_error());
if($input){
echo "Data Berhasil Disimpan";
header("location:jadwal.php");
}else{
echo "Gagal Disimpan";
}
?>