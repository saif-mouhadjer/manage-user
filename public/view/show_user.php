<?php 
    session_start();
    if(!isset($_SESSION['id'])) {
		header("Location: home.php");
	}
    require "./../../app/user/show.php";
    require "./../../app/user/delete.php";
    require "./../../app/user/logout.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>عرض مستخدم</title>
</head>
<body style="background-color: #eee;direction: rtl;">
    <div class="w-5/6 mx-auto">
        <div class="mx-auto w-auto bg-white rounded-xl shadow-md shadow-blue flex flex-col justify-around m-4 p-4">
        <form action="" method="POST" class="inline-block">
            <button type="submit" name="b_delete" class="font-bold flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg  px-3 py-2 text-center  ">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 " viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                حذف الحساب
            </button>
        </form>
        <span class="text-center text-3xl mb-4 font-bold text-gray-700">المعلومات <span class="text-green-400">الشخصية</span></span> 
        <div class=" w-48 h-48 mt-4  mx-auto relative transition duration-500 transform hover:scale-110"><div>
                <img  src="./../../app/image_user/<?php echo $user['image'] ?>" class="w-full h-full  rounded-full" />
            </div>
        </div>
        <div>
            <div class="grid grid-cols-1 md:grid md:grid-cols-3 justify-around">
            <div class="m-4">
                <div class="text-blue text-md font-semibold">الاسم </div>
                <div class="w-full font-semibold outline-none  bg-white focus:border-green border-b border-gray p-2 text-green"><?php echo $user['first_name'];  ?></div>
            </div>
            <div class="m-4">
                <div class="text-blue text-md font-semibold">اللقب</div>
                <div class="w-full font-semibold outline-none  bg-white focus:border-green border-b border-gray p-2 text-green"><?php echo $user['last_name'] ?></div>
            </div>
            <div class="m-4">
                <div class="text-blue text-md font-semibold">تاريخ الميلاد</div>
                <div class="w-full font-semibold outline-none  bg-white focus:border-green border-b border-gray p-2 text-green"><?php echo $user['date_birth'] ?></div>
            </div>
            <div class="m-4">
                <div class="text-blue text-md font-semibold">رقم الهاتف</div>
                <div class="w-full font-semibold outline-none  bg-white focus:border-green border-b border-gray p-2 text-green"><?php echo $user['phone_number'] ?></div>
            </div>
            <div class="m-4">
                <div class="text-blue text-md font-semibold">الجنس</div>
                <div class="w-full font-semibold outline-none  bg-white focus:border-green border-b border-gray p-2 text-green"><?php echo $user['gender'] ?></div>
            </div>
            <div class="m-4">
                <div class="text-blue text-md font-semibold">البريد الالكتروني</div>
                <div class="w-full font-semibold outline-none  bg-white focus:border-green border-b border-gray p-2 text-green"><?php echo $user['email'] ?></div>
            </div>	
        </div>
    </div>
    </div>
    <div class="flex justify-between mb-20">
        <div class="mx-auto mt-5 inline-block transition duration-500 transform hover:translate-x-4">
            <a href="./edit_user.php" type="submit" class="rounded-md px-8 py-2 font-bold text-gray-700 border-2 border-gray bg-green-400 cursor-pointer">
                <img src="./../image/arrow.png" class="w-7 inline-block">
                تعديل المعلومات 
            </a>
        </div>
        <a href="./view_magazine.php" type="button" class="space-x-4  px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-200 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-4 h-4 ml-2 ">
                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
            </svg>
            عرض المجلات
        </a>
        <form action="" method="POST" class="mx-auto mt-5 inline-block transition duration-500 transform hover:-translate-x-4">
            <button name="log_out" type="submit" class="rounded-md px-8 py-2 font-bold text-gray-700 border-2 border-gray bg-red-400 cursor-pointer">
                تسجيل الخروج
                <img src="./../image/arrow.png" class="w-7 inline-block rotate-180">
            </button>
        </form>
    </div>
</body>
</html>