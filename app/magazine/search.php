<?php   
    if(isset($_POST['search'])){
        $id =$_POST['id_magazine'];
        if(empty($id)){
            $sql = "SELECT * FROM magazine ";
            $magazine = mysqli_query($conn, $sql);
        }else{
            $sql = "SELECT * FROM magazine WHERE `id` = '$id'";
            $magazine = mysqli_query($conn, $sql);
        }      
    }