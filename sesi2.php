<?php
session_start();
$user=$_SESSION["username"];
$pass=$_SESSION["password"];
?>
<!DOCTYPE html>
<html>
<body>
<?php
// echo variable sesi yang telah diset di halaman sebelumnya 
echo "Username: " .$user. ".<br>";
echo "Password: " .$pass. ".";

echo "<h2>Cek SESSION klik <a href='sesi3.php>di sini";
?>  
</body>
</html>