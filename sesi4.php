<?php
session_start();
//menghapus semua variable sesi
session_unset();
// menghancurkan sesi
session_destroy();
?>
<!DOCTYPE html>
<html>
<body>
<h3>Sesi telah dihapus</h3>
</body>
</html>