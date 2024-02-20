<html>
<head>
		<title>Logout Berhasil</title>
</head>
<font color="black">
<body background="css/PLN0.jpg">
</html>


<?php session_start();
session_destroy();
echo "<center><h1>Anda berhasil logout. Silahkan menuju <a href='http://localhost/PLN/form.php'>Halaman Utama</a></h1></center>"
?>