<?php
$db_host = 'localhost';
$db_user = 'NitemareJack';
$db_pass = 'aMad_175';
$db_name = 'studentID';

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Error ".msqli_error());

?>  
<!DOCTYPE html>
<html>
<head>
<title>Search Results</title>
</head>
<body>
<?php
   $query = mysqli_real_escape_string($db, $_POST['Search']);
   $resulta = mysqli_query("SELECT * FROM OfficeHours WHERE lastName='". $_POST['lastName']."'";
   $results = mysqli_fetch_array($resulta, MYSQLI_BOTH);
   
?>
</body>
</html>
