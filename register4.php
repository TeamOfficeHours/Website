<?php
session_start();

// initializing variables
$name = "";
$idNumber    = "";
$password_1 = "";
$password_2 = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'NitemareJack', 'aMad_175', 'studentID');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $idNumber = mysqli_real_escape_string($db, $_POST['idNumber']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($idNumber)) { array_push($errors, "Student ID Number is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Login WHERE idNumber='$idNumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['idNumber'] === $idNumber) {
      array_push($errors, "Student ID Number is already registered");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO Login (idNumber, password, Name) VALUES('$idNumber', '$password', '$name')";
  	mysqli_query($db, $query);
  	$_SESSION['idNumber'] = $idNumber;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: OfficeHours.html');
  }
}

// ...

// LOGIN USER
if (isset($_POST['login'])) {
  $idNumber = mysqli_real_escape_string($db, $_POST['idNumber']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($idNumber)) {
  	array_push($errors, "Student ID number is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM Login WHERE idNumber='$idNumber' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['idNumber'] = $idNumber;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: officehours/officeHours.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
