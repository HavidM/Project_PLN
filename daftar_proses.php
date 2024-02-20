<?php
//panggil file config.php untuk menghubung ke server
include "koneksi.php";
$nama = addslashes($_POST['nama']);
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{

$query = mysql_query("insert into tbl_login (id,nama,username,password) values ('$id','$nama','$username','$password')") or die(mysql_error());
if ($query){
header('location:daftar.php?message=success');	
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}
}
?>

