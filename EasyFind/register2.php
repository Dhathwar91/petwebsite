<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <style>
    body{
      background-image: url(loginbg.jpeg);
      /*background-repeat: no-repeat;*/
      background-size: cover;
    }
    form{
      width: 40%;
      height:60%; 
    }
    .header{
      width: 40%;
      background-color: #90979F;

    }
    .btn{
      background-color: #90979F;
    }
  </style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register2.php">
  	<?php include('errors2.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login2.php">Sign in</a>
  	</p>
  </form>
</body>
</html>