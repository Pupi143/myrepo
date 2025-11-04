<?php
$SERVER = "localhost";
$user = "root";
$password = "O/REdP0@5/sv";  // your Bitnami MySQL password
$db_name = "hotel";

$conn = mysqli_connect($SERVER, $user, $password, $db_name);

if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Database connected successfully!";
}
?>
