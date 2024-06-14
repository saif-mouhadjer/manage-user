<?php 
    require "./../../app/user/create.php";
    ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>اضافة مستخدم</title>
</head>

<body style="background-color: #eee;direction: rtl;">
    <section class="pb-20 mt-20">
    <form method="post" action="" enctype="multipart/form-data" class="bg-white flex flex-col gap-4 md:w-5/6 w-4/5  shadow-lg shadow-black mx-auto max-h-fit  justify-between rounded-xl p-4">
		<div class="text-center text-3xl mb-4 font-bold text-gray-700">تسجيل <span class="text-green-400">جديد</span></div>
		<div class="grid grid-cols-1 md:grid md:grid-cols-2">
			<div class="m-4">
				<label class="text-gray-700 text-md font-semibold">الاسم</label>
				<input name="first_name" type="text" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
			</div>
			<div class="m-4">
				<label class="text-gray-700 text-md font-semibold">اللقب</label>
				<input name="last_name" type="text" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
			</div>
			<div class="m-4">
				<label class="text-gray-700 text-md font-semibold">تاريخ الميلاد</label>
				<input name="date_birth" type="date" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
			</div>
			<div class="m-4">
				<label class="text-gray-700 text-md font-semibold">رقم الهاتف</label>
				<input name="phone_number" type="text" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
			</div>
			<div class="m-4">
				<label class="text-gray-700 text-md font-semibold">البريد الالكتروني</label>
				<input name="email" type="email" class="w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
			</div>
			<div class="m-4">
				<label class="text-gray-700 text-md font-semibold">كلمة المرور</label>
				<input name="password" type="password" class="mt-3 w-full mx-auto border-b border-gray-700  focus:border-green-400  outline-none font-semibold text-green-400"/>
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
			<button type="submit" name="create" class="rounded-md px-8 py-2 font-bold text-gray-700 border-2 border-gray
			hover:text-green-400 hover:bg-gray-700 duration-500 cursor-pointer">تسجيل </button>
		</div>
	</form>
    </section>
</body>

</html>