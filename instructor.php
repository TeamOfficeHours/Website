<?php include('register6.php') ?> 
<!DOCTYPE html> 
<html> 
<head>
	<title>Instructor Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="instructor.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Instructor ID</label>
			<input type="text" name="idNumber2" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login">Login</button>
		</div>
	
	</form>


</body>
</html>
