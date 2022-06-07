<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Enter User Name</label>
     	<input type="text" name="uname" placeholder="Enter User Name"><br>

     	<label>Enter Password</label>
     	<input type="password" name="password" placeholder="Enter Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Register Now</a>
     </form>
</body>
</html>