<?php
include('koneksi.php');
$pel=4;
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor = $_POST['nomor'];
$daya = $_POST['daya'];
$gol = $_POST['gol'];





$query = mysql_query("update tbl_pln set nama='$nama', alamat='$alamat', nomor='$nomor',
						daya='$daya', gol='$gol' where id='$id'") or
die(mysql_error());
if ($query)
		{ header('location:tampil.php?message=success');
}
?>