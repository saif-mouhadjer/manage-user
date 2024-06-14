
<?php
if(isset($_POST['b_delete'])){
    if(!isset($_SESSION['id'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM user WHERE `user`.`id` = '$id' ";
        mysqli_query($conn, $sql);
	}else{
        $id = $_SESSION['id'];
        $sql = "DELETE FROM user WHERE `user`.`id` = '$id' ";
        mysqli_query($conn, $sql);
        session_destroy();
        header("Location: home.php");
    }
    
}