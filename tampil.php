<?php
include('koneksi.php'); ?>
<html>
<head>
<title>Tampil Nilai</title>
 <style type="text/css">

    @import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #3e94ec;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 100;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 300px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

</style>

</head>
<body>
<body background="css/PLN5.png">
<font color="blue" size="5">
<center><h1>Entry / Edit Informasi AIL</h1></center>
<center><b><a href="e-ail.php"> + Entry Data Pelanggan</a></b></center>
<table border="0" align="center" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
<th class="text-left">No</th>
<th class="text-left">Nama</th>
<th class="text-left">Alamat</th>
<th class="text-left">Nomor</th>
<th class="text-left">Daya</th>  
<th class="text-left">Gol Tarif</th>
<th class="text-left">Pilihan</th>

</tr>
</thead>
<tbody>
<?php
 
$query = mysql_query("select * from tbl_pln");
		
		$no = 1;
		while ($data = mysql_fetch_array($query)) {
		?>
		<tr>
		<td text align="center"><?php echo $no; ?></font></td>
		<td text align="center"><?php echo strip_tags($data['nama']); ?></td>
		<td text align="center"><?php echo strip_tags($data['alamat']); ?></td>
		<td text align="center"><?php echo strip_tags($data['nomor']); ?></td>
		<td text align="center"><?php echo strip_tags($data['daya']); ?></td>
		<td text align="center"><?php echo strip_tags($data['gol']); ?></td>
		<td>
		<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> ||
		<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
		</td>
	</tr>

<?php
		$no++;
		}
		?>
	</tbody>
</table>
<tr>
<a></a></br>
<a></a></br>
<font color="#000000"><a><marquee><i><b>" Data Sudah di Input "</b></i></marquee>
</font>
</body>
</html>

<h3><a href="logout.php"><center>LOG OUT</center></a></h3>
