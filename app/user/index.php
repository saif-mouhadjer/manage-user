<?php
require './../../app/Database_Connect.php';
    $sql = "SELECT * FROM `user` ";
    $user=mysqli_query($conn, $sql);
