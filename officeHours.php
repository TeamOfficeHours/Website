<?php ?>

<!DOCTYPE html>

<html>

<head>

	<title>NC A&T SU Faculty Office Hours</title>

	<link ref="stylesheet" type="text/css" href="mystyles2.css">

</head>

<body id="body-color">
      <div id="register">
 
	    <h3>Search Instructor Office Hours</h3>
 
	    <td>You  may search either by first or last name</td>
	    <fieldset style="width:30%">
	    <form  method="POST" action="search.php">
	      <table border="0">
              <tr>
	      <td>First Name:</td>
	      <td><input  type="text" name="first_Name" /></td>
              </tr>
              <tr>
              <td>Last Name:</td>
 	      <td><input  type="text" name="last_Name"  /></td>
	      </tr>
	      <tr>
	      <td><input  type="submit" name="submit" value="Search" /></td>
	      </tr>
	    </form> 
	    </table>
	    </fieldset>
</div>
</body>
</html>
