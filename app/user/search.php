<?php   
    if(isset($_POST['search'])){
        $id =$_POST['id_user'];
        if(empty($id)){
            $sql = "SELECT * FROM user ";
            $user = mysqli_query($conn, $sql);
        }else{
            $sql = "SELECT * FROM user WHERE `id` = '$id'";
            $user = mysqli_query($conn, $sql);
        }      
    }