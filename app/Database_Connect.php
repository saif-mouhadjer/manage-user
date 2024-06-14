<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "manage_user_db";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
  die("فشل الاتصال: " . mysqli_connect_error());
}
?>
