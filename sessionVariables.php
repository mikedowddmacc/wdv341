<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
	<header>
		<h1>WDV341 Intro to PHP</h1>
		<h1></h1>
	</header>

		<h2>Enter Username and Password</h2> 
		<div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'Michael Dowd' && 
                  $_POST['password'] == 'iowa') {
                  $_SESSION['validuser'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'Michael Dowd';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Invalid username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = Michael Dowd" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "iowa" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
		 
	  </div>

</body>
</html>