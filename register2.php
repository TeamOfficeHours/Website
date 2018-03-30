<?php 
// initializing variables
$firstName = "";
$lastName = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'NitemareJack', 'aMad_175', 'studentID');

// Search table
if (isset($_POST['submit'])) {
  	$firstName = mysqli_real_escape_string($db, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($db, $_POST['lastName']);
	$query = mysqli_query("SELECT * FROM OfficeHours WHERE 'firstName'='$firstName' OR 'lastName'='$lastName'");
  	$results = mysqli_fetch_array($db, $query);
	if (mysqli_num_rows($results) =< 1) {
		array_push("Here are the results of your search");
	}
	else {
		array_push("No results found."); 
	}
}
?>
