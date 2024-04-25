<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourismbookingsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM flight";
$result=$conn->query($sql);

?>