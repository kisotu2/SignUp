<?php 
$sever = "localhost";
$user = "root";
$pass = "";
$db_name = "upload_image";

$conn = new mysqli($sever,$user,$pass,$db_name);

if(!$conn ){
    die("Connection error");
}

?>