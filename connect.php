<?php
$SERVER = "hotel-db.cluster-cnuoqi6ouauq.ap-south-1.rds.amazonaws.com";
$user = "admin";
$password = "'HotelPass123!'";
$db_name = "hotel";

$conn = mysqli_connect($SERVER, $user, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Database connected successfully!";
}
?>
