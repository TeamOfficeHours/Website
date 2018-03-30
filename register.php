<?php include("register4.php") ?>

<!Doctype html>

<html>
 
<head>
    
<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="$1">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="mystyles2.css">


    <title>Student Registration Page</title>

     

</head>

<body id="body-color">

  <div id="register">
    <form action ="register.php" method = "post">

         <?php include('errors.php'); ?>

         <fieldset style="width:30%">

         <table border="0">

             <tr>

	     <td>Student Name:</td><td>
 
            <input type="text" name="name"></td>

	     </tr>

             <tr>

             <td>Student ID Number:</td><td>

             <input type="text" name="idNumber"></td>

             </tr>

             <tr>

             <td>Password</td><td>

             <input type="password" name="password_1"></td>

	     </tr>

             <tr>

             <td>Confirm Password</td><td>

             <input type="password" name="password_2"
>
             <tr>

             <td><input id="button" type="submit" name="submit" value="submit"></td>

             </tr>

             

    </form>

    </fieldset>

    </table>

    </div>

</body>

</html>
