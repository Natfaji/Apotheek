<?php
$servername = "localhost";
$username = "Admin";
$password = "root";
$dbname = "apotheek";

// Create and check connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());