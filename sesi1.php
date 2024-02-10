<?php
//memulai sesi
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["username"] = "admin";
$_SESSION["password"] = "admin";

echo "Variable sesi telah diciptakan. ";
echo "<h2>Cek SESSION klik <a href='sesi2.php'>di sini";
?>
</body>
</html>