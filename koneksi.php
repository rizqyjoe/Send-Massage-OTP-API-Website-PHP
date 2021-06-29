<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "FORMWA";
$mysqli = new mysqli($host, $username, $password, $db_name);
if(mysqli_connect_errno()) {
echo "Error: Could not connect to database.";
exit;
}
?>