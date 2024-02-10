<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$input = mysqli_query($koneksi, "INSERT INTO dosen
VALUES('$nim','$nama','$alamat','$jabatan')") or die(mysqli_error());
if($input){
    echo "Data Berhasil Disimpan";
header("location:dosen.php");
    }else{
echo "Gagal Disimpan";
}
?>