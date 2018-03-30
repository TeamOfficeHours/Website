<?php
$dbhost = "localhost";
$dbuser = "NitemareJack";
$dbpass = "aMad_175";
$dbname = "db1";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
die("Database connection failed: " . mysqli_connect_errno() ." (" . mysqli_connect_errno() . ")");
}

$name = $_POST['Name'];
$ID_Number = $_POST['ID'];
$Date = date("Y-m-d H:i:s");
$Speed = $_POST['Speed'];


$query = "INSERT INTO users (Name, ID_Number, CurrentDate, Speed) VALUES ('$name', '$ID_Number', '$Date', '$Speed')";

$result = mysqli_query($connection, $query);

if ($result) {
   echo ("Success");
}
else {
   die("Database query failed. " . mysqli_error($connection));

}

mysqli_close($connection);
?>
