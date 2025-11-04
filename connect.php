<?php
$SERVER = "localhost";
$user = "root";
$password = "O/REdP0@5/sv";  // Bitnami MySQL password
$db_name = "hotel";

$conn = mysqli_connect($SERVER, $user, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Database connected successfully!";
}
?>
