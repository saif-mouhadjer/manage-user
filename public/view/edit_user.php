<?php 
	session_start();
	if(!isset($_SESSION['id'])) {
		header("Location: home.php");
	}
    require "./../../app/user/edit.php";
    ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>تعديل مستخدم</title>
</head>

<body style="background-color: #eee;direction: rtl;">
<?php 
    if(isset($msg)){
        echo "
        <div class='flex p-2  mt-16 transform -translate-x-1/2  w-1/2   bg-red-300 rounded-lg border-2 border-red-900' >
            <div class='w-1/12'><img src='./../image/Danger.png' alt='' class='w-7'></div>
            <div class='w-11/12 text-center text-red-900 text-x font-bold'>
            ".$msg."
            </div>
        </div>
            ";
    }
?>

    <form action="" method="Post" class="pb-20 mt-20" enctype="multipart/form-data">
    <div class="bg-white flex flex-col gap-4 md:w-5/6 w-4/5  shadow-lg shadow-black mx-auto max-h-fit  justify-between rounded-xl p-4">
		<div class="text-center text-3xl mb-4 font-bold text-gray-700">تعديل <span class="text-green-400">المعلومات</span></div>
		<div class="grid grid-cols-1 md:grid md:grid-cols-2">
		
        <div class="m-4">
			<label class="text-gray-700 text-md font-semibold">الاسم</label>
			<input value="<?php echo $user['first_name'] ?>" name="first_name" type="text" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
		</div>
        <div class="m-4">
			<label class="text-gray-700 text-md font-semibold">اللقب</label>
			<input value="<?php echo $user['last_name'] ?>" name="last_name"  type="text" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
		</div>
        <div class="m-4">
			<label class="text-gray-700 text-md font-semibold">تاريخ الميلاد</label>
			<input value="<?php echo $user['date_birth'] ?>" name="date_birth" type="date" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
		</div>
        <div class="m-4">
			<label class="text-gray-700 text-md font-semibold">رقم الهاتف</label>
			<input value="<?php echo $user['phone_number'] ?>" name="phone_number" type="text" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
		</div>
        <div class="m-4">
			<label class="text-gray-700 text-md font-semibold">البريد الالكتروني</label>
			<input value="<?php echo $user['email'] ?>" type="email" name="email" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
		</div>
        <div class="m-4">
			<label class="text-gray-700 text-md font-semibold">كلمة المرور</label>
			<input type="password" name="password" class="mt-3 w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
		</div>

		<div class="m-4">
			<label class="text-gray-700 text-md font-semibold">الجنس</label>
			<select name="gender" class="font-semibold w-full outline-none overflow-scroll focus:bg-gr bg-white focus:border-green-400 border-b border-gray p-2 text-green-400">
				<option class="p-2 border-b border-gray " value="ذكر">ذكر</option>
				<option class="p-2 border-b border-gray " value="انثى">انثى</option>
			</select>
		</div>

        <div class="m-4">
			<label class="text-gray-700 text-md font-semibold">صورة شخصية</label>
			<input name="image" id="image" type="file" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
		</div>

		</div>
		<div class="mx-auto mt-8 ">
			<button type="submit" name="edit" class="rounded-md px-8 py-2 font-bold text-gray-700 border-2 border-gray
			hover:text-green-400 hover:bg-gray-700 duration-500 cursor-pointer"">تعديل</button>
		</div>
	</div>
	</div>
    </form>
</body>

</html>