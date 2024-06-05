<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "crud";

$connection = new mysqli($server, $user, $pass, $db);

if ($connection->connect_errno) {
    die("Failed connection: " . $connection->connect_errno);
} else {
    //echo "Connection established...";
}
?>
