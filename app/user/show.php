<?php 
    require './../../app/Database_Connect.php';
    
    $id = $_SESSION['id'];
    $sql = "SELECT *  FROM `user` WHERE `id` = $id";
    $user = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($user);

        