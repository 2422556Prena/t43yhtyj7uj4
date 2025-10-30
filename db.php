<?php
// db.php - real connection file (NOT uploaded to GitHub)
$mysqli = new mysqli("localhost", "2422556", "Prena0987", "db2422556");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
?>
