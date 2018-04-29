<?php
session_start();
 
// initializing variables
$name = "";
$idNumber    = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'NitemareJack', 'aMad_175', 'studentID');

// LOGIN USER
if (isset($_POST['login'])) {
  $idNumber = mysqli_real_escape_string($db, $_POST['idNumber2']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($idNumber)) {
  	array_push($errors, "Instructor ID number is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM Instructor WHERE idNumber2='$idNumber' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['idNumber2'] = $idNumber;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: update.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
