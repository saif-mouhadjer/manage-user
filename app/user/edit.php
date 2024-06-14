<?php
require './../../app/Database_Connect.php';

$id = $_SESSION['id'];

$sql = "SELECT *
FROM user
WHERE  id = '$id'";
$user=mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($user);

if(isset($_POST['edit'])){
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
   
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
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
        $msg= "الصورة غير موجودة";
    }

    
    if($msg == null){
        $sql = "UPDATE `user`
        SET `first_name` = '$first_name',
            `last_name` = '$last_name',
            `date_birth` = '$date_birth',
            `phone_number` = '$phone_number',
            `gender` = '$gender',
            `email` = '$email',
            `password` = '$hashed_password',
            `image` = '$imagePath'
        WHERE `id` = '$id'";
        mysqli_query($conn, $sql);

        header("Location: show_user.php");
    }
    
}