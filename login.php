<html>
<head>
		<title>Login Berhasil</title>
<body background="css/PLN5.png">		
</head>
</html>



<?php session_start();
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$query=mysql_query("select * from tbl_login where username='$username' and password='$password'");
$cek=mysql_num_rows($query);

if($cek){
$_SESSION['username']=$username;
?><i><font size=20px><center>Anda berhasil login. Silahkan menuju <a href="e-ail.php">e- AIL</a></body></center></font></i><?php
}else{
?>Anda gagal login. Silahkan <a href="form.php">Login Kembali</a><?php echo mysql_error();
} 	
?>