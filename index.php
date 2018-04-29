<?php include('officehours/register4.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>North Carolina Agricultural and Technical State University Professor Office Hours</title>
	<link rel="stylesheet" type="text/css" href="officehours/mystyles.css">
</head>
<body>
<img src="officehours/AggiesDoLogos.jpg" width="1321" height="100" style="float: center;" />
<h1 align="center" id="logo"><em> Welcome to NCA&T SU Faculty Directory </em></h1>
	
<table align="right" width="70%" border="0">
	<form method="post" action="index.php">

		<?php include('officehours/errors.php'); ?>
		<div class="login">
						
			<label>Student ID number</label>
			<input type="text" name="idNumber" >
			
		</div>
		<div class="login">
			
			<label>Password</label>
			<input type="password" name="password">
			
		</div>
                
		<div class="login">
			<button type="submit" class="btn" name="login">Login</button>
		</div>
		<p>
			Not Registered Yet? <a href="officehours/register.php">Register</a>
		</p>
		<p>
		        <a href="officehours/instructor.php">Instructor Login</a>
		</p>
	</form>


</body>
</html>
