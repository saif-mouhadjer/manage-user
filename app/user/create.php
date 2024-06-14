<?php


if(isset($_POST['create'])){
    require './../../app/Database_Connect.php';
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $date_birth = $_POST["date_birth"];
    $phone_number = $_POST["phone_number"];
    $password = $_POST["password"];
    $email  = $_POST["email"];
    $gender = $_POST["gender"];

    $hashed_password = md5($password);
    $msg=null;

    if (strlen($first_name) > 25) {$msg="طول حقل الاسم اكبر من المتوقع";}
    if (strlen($last_name) > 25) {$msg="طول حقل اللقب اكبر من المتوقع";}
    if (strlen($phone_number) > 10) {$msg="طول حقل الهاتف اكبر من المتوقع";}
    if (strlen($email) > 50) {$msg="طول حقل البريد الالكتروني اكبر من المتوقع";}
    if (strlen($password) > 20) {$msg="طول حقل كلمة المرور اكبر من المتوقع";}

    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = './../../app/image_user/';
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $randomName = uniqid() . '_' . time() . '.' . $extension;
        $uploadFile = $uploadDir . $randomName;
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            $imagePath = $randomName;
        } else {
            $msg= "حدثت مشكلة أثناء رفع الصورة.";
        }
    } else {
        $msg= "حدثت مشكلة أثناء رفع الصورة.";
    }
    
    if($msg == null){
        $sql = "INSERT INTO user (`first_name`, `last_name`, `date_birth`, `phone_number` ,`password` ,`gender` , `image`, `email`) 
        VALUES ('$first_name', '$last_name', '$date_birth', '$phone_number' , '$hashed_password' ,'$gender' ,'$imagePath' ,'$email' )";
        mysqli_query($conn, $sql);
        $sql = "SELECT * FROM user ORDER BY id DESC LIMIT 1";
        $result=mysqli_query($conn, $sql);
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $user['id'];
        header("Location: show_user.php");
    }
    
}
