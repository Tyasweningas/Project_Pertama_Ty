<!DOCTYPE html>
<html>
<head>
    <title>Membuat login dengan PHP dan MySQLi</title>
</head>
<body>
    <h3>Masukkan Username & Password</h3>
        <form method="POST" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
        </form>
</body>
</html>