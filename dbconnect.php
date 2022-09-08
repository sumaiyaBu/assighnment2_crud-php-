<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mytest6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//var_dump($conn);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}  
//echo "<br>Connected Successfully<br>";

?>