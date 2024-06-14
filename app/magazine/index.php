<?php
require './../../app/Database_Connect.php';
    $sql = "SELECT * FROM `magazine` ";
    $magazine=mysqli_query($conn, $sql);
