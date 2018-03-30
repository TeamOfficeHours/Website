<?php
$dbhost = "localhost";
$dbuser = "NitemareJack";
$dbpass = "aMad_175";
$dbname = "studentID";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
die("Database connection failed: " . mysqli_connect_errno() ." (" . mysqli_connect_errno() . ")");
}

$name = $_POST['idNumber'];
$password = $_POST['password'];


$query = "INSERT INTO users (idNumber, password) VALUES ('$name', '$password')";

$result = mysqli_query($connection, $query);

if ($result) {
   echo ("Success");
}
else {
   die("Database query failed. " . mysqli_error($connection));

}

mysqli_close($connection);
?>
