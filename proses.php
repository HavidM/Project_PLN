<?php
	//panggil file config.php untuk menghubung ke server
	include('koneksi.php');
	//tangkap data dari form
	$nama = addslashes($_POST['nama']);
	$alamat = addslashes($_POST['alamat']);
	$nomor = addslashes($_POST['nomor']);
	$daya = addslashes($_POST['daya']);
	$gol = addslashes($_POST['gol']);
	
	
	//output

	
	echo "Nomor:".$nomor."<br>";
	echo "Nama:".$nama."<br>";
	echo "=====PLN=====<br>";
	echo "Alamat:".$alamat."<br>";
	echo "Daya:".$daya."<br>";
	echo "Gol:".$gol."<br>";
	
	
	//kondisi if
	
	
	
	$query = mysql_query("insert into tbl_pln (id,nama,alamat,nomor,daya,gol) values ('', '$nama', '$alamat', '$nomor', '$daya', '$gol')") or die(mysql_error());
if ($query) {
header('location:e-ail.php?message=success');
}
?>
