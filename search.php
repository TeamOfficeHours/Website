<?php

$db_host = 'localhost';

$db_user = 'NitemareJack';

$db_pass = 'aMad_175';

$db_name = 'studentID';


$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("Error ".msqli_error());


$first_Name=mysqli_real_escape_string($db, trim($_POST['first_Name']));
$last_Name=mysqli_real_escape_string($db, trim($_POST['last_Name']));
$query=("SELECT * FROM officeHours WHERE (first_Name = '$first_Name') || (last_Name = '$last_Name')");
   $result = mysqli_query($db, $query) or die("Couldn't execute search.");
   $nrows=mysqli_num_rows($result);

   echo "<h1>Office Hours</h1>";
   echo "<table cellspacing='15'>";
   echo "<tr><td colspan='4'><hr /></td></tr>";
   echo '<tr><th></th><th>First Name</th><th>Last Name</th><th>Days in Office</th><th>From</th><th>To</th></tr>';
   for ($i=0;$i<$nrows;$i++)
   {
        $n = $i + 1;
        $row = mysqli_fetch_assoc($result);
        extract($row);
        echo "<tr>\n
             <td>$n.</td>\n
             <td>{$row['first_Name']}</td>\n
             <td>{$row['last_Name']}</td>\n
             <td>{$row['days']}</td>\n
             <td>{$row['start']}</td>\n
             <td>{$row['end']}</td>\n
             </tr>\n";
        }
        echo "</table>\n"; 
?>  
