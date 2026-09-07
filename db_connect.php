<?php
$host = "localhost";   
$user = "root";        
$pass = "";            // your MySQL password 
$db   = "auth_system"; // the database you created

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
