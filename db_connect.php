<?php
$servername = "localhost"; // localhost
$username = "root"; // root
$password = "root"; // root
$dbname = "spotitube";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
