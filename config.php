<?php
$servername = "localhost";
$username = "itb21";
$password = "itb21";
$dbname = "itb21";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
