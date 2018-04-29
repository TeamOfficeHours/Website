<?php

// initializing variables
$f_name = "";
$l_name = "";
$days = "";
$open = "";
$close= "";

// connect to the database
$db = mysqli_connect('localhost', 'NitemareJack', 'aMad_175', 'studentID') or die("Error ".mysqli_error());

// UPDATE HOURS
if (isset($_POST['update'])) {
  $f_name = mysqli_real_escape_string($db, trim($_POST['f_name']));
  $l_name = mysqli_real_escape_string($db, trim($_POST['l_name']));
  $days = mysqli_real_escape_string($db, trim($_POST['days']));
  $open = mysqli_real_escape_string($db, trim($_POST['open']));
  $close = mysqli_real_escape_string($db, trim($_POST['close']));
  $query = ("UPDATE officeHours SET first_Name = '$f_name', last_name = '$l_name', days = '$days', start = '$open', end = '$close' WHERE (first_Name = '$f_name') AND (last_Name = '$l_name')");
  mysqli_query($db, $query) or die("unable to update.");
}
?>
