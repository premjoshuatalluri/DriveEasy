<?php

define("DB_SERVER","db-assignment.cwatl2b7zrec.us-east-1.rds.amazonaws.com");
define("DB_USERNAME","admin");
define("DB_PASSWORD","Group$06");
define("DB_DATABASE","car_rental");

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>
