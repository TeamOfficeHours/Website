<?php include ("register5.php") ?>

<!Doctype html>

<html>
 
<head>
    
<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="description" content="$1">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="mystyles2.css">


    <title>Instructor Update Page</title>

     

</head>

<body id="body-color">

  <div id="register">
    <form action ="update.php" method = "post">

         <?php include('errors.php'); ?>

         <fieldset style="width:30%">

         <table border="0">

             <tr>

	     <td>Instructor First Name:</td><td>
 
            <input type="text" name="f_name"></td>

	     </tr>
	     <tr>

	     <td>Instructor Last Name:</td><td>
 
            <input type="text" name="l_name"></td>

	     </tr>  
             <tr>

             <td>Days in office:</td><td>

             <input type="text" name="days"></td>

             </tr>

             <tr>

             <td>Open Time</td><td>

             <input type="text" name="open"></td>

	     </tr>

             <tr>

             <td>Close Time</td><td>

             <input type="text" name="close"
	     </td>
             <tr>

             <td><input id="button" type="submit" name="update" value="update"></td>

             </tr>

             

    </form>

    </fieldset>

    </table>

    </div>

</body>

</html>
