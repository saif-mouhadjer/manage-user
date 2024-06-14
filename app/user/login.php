<?php
if(isset($_POST['login'])){
    require './../../app/Database_Connect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($email == "admin@gmail.com" && $password == "admin"){
        header("Location: list_user.php");
    }

    $hashed_password = md5($password);
    $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$hashed_password'";
    $user = mysqli_query($conn, $sql);

    if(mysqli_num_rows($user) > 0){
        $user = mysqli_fetch_assoc($user);
        session_start();
        $_SESSION['id'] = $user['id'];
        header("Location: show_user.php");
    }else{
        $msg=true;   
    }
}