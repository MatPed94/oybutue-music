<?php
$con = mysqli_connect("localhost", "root", "root", "oybutue");
if ($con->connect_error) {
   echo "Not connected, error: " . $con->connect_error;
}
else {
   echo "Connected.";
}

 ?>
