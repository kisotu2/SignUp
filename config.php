<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Database Connection Problem". $conn->connect_error);
}
?>