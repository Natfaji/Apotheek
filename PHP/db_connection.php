<?php
$servername = "localhost";
$username = "Admin";
$password = "root";
$dbname = "apotheek_users";

// Create and check connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

// echo "Connected successfully";

?>