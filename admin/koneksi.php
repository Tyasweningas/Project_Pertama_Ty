<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_akademik"; //Nama Database

// melakukan koneksi ke db
$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die ("Gagal koneksi: " . mysqli_connect_error($koneksi));
}
?>