<?php
session_start();
$user=$_SESSION["username"];
$pass=$_SESSION["password"];
?>
<!DOCTYPE html>
<html>
<body>
<?php
// echo veriable sesi yang telah diset di halaman sebelumnya
echo "Username: " .$user. ".<br>";
echo "Password: " .$pass. ".";

echo "<h2>Hapus SESSION klik <a href='sesi4.php'>di sini";
?>   
</body>
</html>
