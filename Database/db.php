<?php

$host = "db-assignment.cwatl2b7zrec.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Group$06";
$database = "DriveEasy";

try {
    $mysql = new PDO("mysql:host=".$host.";dbname=".$database, $username, $password);
    echo "Connected successfully! <br>";
} catch (PDOException $e) {
    echo "Database Connection Error!: ";
    var_dump($e);
    die();
}
?>
