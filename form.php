<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form </title>
    
        <link rel="stylesheet" href="css/style.css">
    
  </head>

  <body>

    <h1 style="text-align:left;margin-left:67px;">Login</h1>

<!-- Login Container -->
<section class="login">
    <form action="login.php" method="post">
    	
        <!-- The Username Field -->
        <label for="username">Username
        <input type="text" name="username" id="username" />
    	</label>
        
        <!-- The Password Field -->
        <label for="password">Password
        <input type="password" name="password" id="password" />
        </label>
        
        <!-- The Remember Me Checkbox -->
        <input type="checkbox" name="remember" id="remember" />
        <label class="check" for="remember"><span></span>Remember Me</label>
        
        <!-- Clearn both sides -->
        <div class="clear"></div>
        
        <!-- Recover Button -->
       <a href= daftar.php>
       <input type="button" value="Daftar"/>
        </a>
        <!-- The Login Button -->
        <input type="submit" value="Login" />
    </form>
    </section>
    
    
    
    
    
  </body>
</html>
