<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form With Flat Desing</title>
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

  <body background="css/PLN2.jpg">

    <h1>Entry / Edit Informasi AIL</h1>

<!-- Login Container -->
<section class="login">
    <form action="proses.php" method="post">
    	
        <!-- The Username Field -->
        <label for="nama">Nama
        <input type="text" name="nama" id="nama" />
        </label>

        <label for="alamat">Alamat
        <input type="text" name="alamat" id="alamat" />
        </label>

        <label for="nomor">ID Pelanggan
        <input type="text" name="nomor" id="nomor" />
        </label>


        <tr>
        <td>Daya</td><td>:</td><td><select name="daya"><option value="450">450 kWh</option>
                                                            <option value="900">900 kWh</option>  
                                                            <option value="1300">1300 kWh</option> 
                                                            <option value="2200">2200 kWh</option></select></td>
        </tr>
        
        <!-- The Password Field -->
        
        <tr>
        <td>Gol Tarif</td><td>:</td><td><select name="gol"><option value="R1T">R1T</option>
                                                            <option value="R1">R1</option>   
                                                            <option value="P1T">P1T</option></select></td>
        </tr>
        <!-- The Remember Me Checkbox -->
        <div>
        <input type="checkbox" name="remember" id="remember" />
        <label class="check" for="remember"><span></span><i>Verifikasi</i></label>
        </div>
        
        
        <!-- Clearn both sides -->
        <div class="clear"></div>
        
        <a href="tampil.php">
        <input type="button" value="Tampil" />
        </a>
        <!-- The Login Button -->
        <input type="submit" value="Input" />
    </form>
    </section>
    
    
    
    
    
  </body>
</html>
