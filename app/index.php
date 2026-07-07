<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_NAME');
 
$conn = new mysqli($host, $user, $password, $database);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
echo "<h1>Hello from PHP + MySQL via Docker Compose</h1>";
echo "<p>Successfully connected to database: " . $database . "</p>";
?>
