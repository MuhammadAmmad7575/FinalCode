<?php
$servername = "ammad051-server";
$username = "lwhypzaary";
$password = "76V5J6A575C5JVKQ$";
$dbname = "final_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
