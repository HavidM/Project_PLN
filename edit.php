<?php
include('koneksi.php');
?>
<html>
<head>
<title>Edit Informasi Pelanggan</title>
<style type="text/css">
    /* CSS Document */

/*
 * IMporting the font
*/  
@import url(http://fonts.googleapis.com/css?family=Roboto+Slab|Roboto);

/*
 * General styling
 */
body {
    padding:0;
    margin:0;
    background-color:#ecf0f1;
    }
    
.clear {
    clear:both;
    width:100%;
    }   
    
h1{
    margin:27px auto;
    padding:0;
    font-family: “Comic Sans MS”, cursive;
    font-size:55px;
    font-weight:1000;
    color:#2f4f4f;
    text-align:center;
    }   

/*
 * Styling the container for the login form.
 */

.login {
    width:290px;
    padding:12px;
    margin:20px auto;
    background-color:#deb887;
    }
/*
 * Styling the Lables and checkbox font
 */
        
label {
    font-size:15px;
    font-family: 'Roboto Slab', serif;
    color:#708090;
    }
    
.check {
    font-size:15px;
    font-family: 'Roboto Slab', serif;}     

/*
 * General Input Style
 */
        
input[type="text"],
input[type="password"],
input[type="submit"],
input[type="button"]  {
    width: calc(100% - 33px);
    margin:5px 0 6px 0;
    padding:9px;
    border: solid 5px #ccc;
    font-size:15px;
    background-color:#ecf0f1;
    }   

/*
 * Styling the Buttons
 */
        
input[type="submit"],
input[type="button"] {
    position:relative;
    width:calc(49% - 15px);
    background-color:#48d1cc;
    border:10px;
    color:#000000;
    
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
    
    -webkit-box-shadow: 0px 9px 0px #2980b9;
    -moz-box-shadow: 0px 9px 0px #2980b9;
    box-shadow: 0px 9px 0px #2980b9;
    }
    
input[type="submit"]:active,
input[type="button"]:active{
    
    -webkit-transition: all 0.1s;
    -moz-transition: all 0.1s;
    transition: all 0.1s;
    
    position:relative;
    top:7px;
    
    -webkit-box-shadow: 0px 2px 0px #16a085;
    -moz-box-shadow: 0px 2px 0px #16a085;
    box-shadow: 0px 2px 0px #16a085;
}   
    
input[type="submit"] {
    float:right;
    }   

/*
 * Styling the checkbox
 */
        
input[type="checkbox"] {
    -webkit-appearance: none;
    background-color: #fafafa;
    border: 1px solid #cacece;
    box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
    padding: 9px;
    border-radius: 3px;
    position: relative;
}

input[type="checkbox"]:active, .input[type="checkbox"]:checked:active {
    box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
}

input[type="checkbox"]:checked {
    background-color: #e9ecee;
    border: 1px solid #adb8c0;
    box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05), inset 15px 10px -12px rgba(255,255,255,0.1);
    color: #99a1a7;
}

input[type="checkbox"]:checked:after {
    content: '\2714';
    font-size: 14px;
    position: absolute;
    top: 0px;
    left: 3px;
    color: #99a1a7;
}
</style>
</head>
<body>
<body bgcolor=#00CED1>
<font color="black" size="5">
<center><h3>Edit Informasi Pelanggan </h3></center>
<?php
$id = $_GET['id'];
$query = mysql_query("select * from tbl_pln where id='$id'") or die(mysql_error());
$data = mysql_fetch_array($query);
?>
<form action="proses_ubah.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0" align="center">
	<tbody>
		<tr>
			<td text align="left">Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" maxlength="90" required="required" value="<?php
echo $data['nama']; ?>" /></td>
	</tr>
		<tr>
			<td text align="left">Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" maxlength="100" required="required"
value="<?php echo $data['alamat']; ?>" /></td>
	</tr>
	<tr>
			<td text align="left">ID Pelanggan</td>
			<td>:</td>
			<td><input type="text" name="nomor" maxlength="20" required="required" value="<?php echo
$data['nomor']; ?>" /></td>
	</tr>
	 <tr>
        <td>Daya</td><td>:</td><td><select name="daya"><option value="450">450 kWh</option>
                                                            <option value="900">900 kWh</option>  
                                                            <option value="1300">1300 kWh</option> 
                                                            <option value="2200">2200 kWh</option></select></td>
        </tr>
	<tr>
        <td>Gol Tarif</td><td>:</td><td><select name="gol"><option value="R1T">R1T</option>
                                                            <option value="R1">R1</option>   
                                                            <option value="P1T">P1T</option></select></td>
        </tr>
	<tr>
			<td align="right" colspan="3"><input type="submit" name="submit" value="submit"></td>
	</tr>
	</tbody>
</table>
</form>
<center><a href="tampil.php"><i>Tampil</i></a></center>
</body>
</html>