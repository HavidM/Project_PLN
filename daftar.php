<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form </title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <h1>Pedaftaran</h1>

<!-- Login Container -->
<section class="login">
    <form action="daftar_proses.php" method="post">
    	
        <!-- The Username Field -->
        <label for="nama">Nama
        <input type="text" name="nama" id="nama" />
        </label>

        <label for="username">Username
        <input type="text" name="username" id="username" />
    	</label>
        
        <!-- The Password Field -->
        <label for="password">Password
        <input type="password" name="password" id="password" />
        </label>
        
        <!-- The Remember Me Checkbox -->
        
        <!-- Clearn both sides -->
        <div class="clear"></div>
        
        <!-- Recover Button -->
       <a href= form.php>
       <input type="button" value="Login"/>
        </a>
        <!-- The Login Button -->
        <input type="submit" value="Daftar" />
    </form>
    </section>
    
    
    
    
    
  </body>
</html>
