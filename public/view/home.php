<?php 
    require "./../../app/user/login.php";
    ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>الصفحة الرئيسية</title>
</head>

<body style="direction: rtl; background-color: #eee;">
<?php 
if(isset($msg)){
    if($msg){
        echo "
        <div class='flex p-2  mt-16 transform -translate-x-1/2  w-1/2   bg-red-300 rounded-lg border-2 border-red-900' >
        <div class='w-1/12'><img src='./../image/Danger.png' alt='' class='w-7'></div>
        <div class='w-11/12 text-center text-red-900 text-x font-bold'>
            المعلومات التي ادخلتها غير صحيحة تأكد منها وحاول مجددا
        </div>
    </div>
        ";
    }
}
?>
<div class="md:flex md:flex-row flex flex-col justify-items-center justify-around">
  <!--Title-->
  
  <div class="mr-16 grid grid-cols-1 content-center">
    <div class="text-center mx-auto">
        <div><img src="./../image/Guide_info.png" class="w-52 h-56 inline-block mb-4"></div>
    	<p class="md:text-3xl text-xl  mb-1 text-gray-700 font-bold">
      مرحبا بكم في موقعنا لتسيير عضويتك
      </p>
    	<p class="md:text-3xl text-xl mb-1 text-gray-700 font-semibold">نضمن لك تجربة سهلة و بسيطة</p>
      <p class="md:text-3xl text-xl text-green-400 font-semibold">الامان هدفنا</p>

	</div>
	
  </div>
  <div class=" md:w-1/2 w-3/4 h-auto m-14">
    <form method="POST" action="" class="bg-white flex flex-col md:w-2/3 w-3/4  shadow-lg shadow-blue mx-auto  justify-between rounded-xl p-4">
		  <div class="text-center text-3xl mb-5 font-bold text-gray-700">تسجيل <span class="text-green-400">الدخول</span> </div>
		  <div class="mb-14">
        <label class="text-gray-700">البريد الالكتروني</label>
        <input  type="text" name="email" class="w-full mx-auto border-b border-blue  focus:border-green-400  outline-none font-semibold mt-2 text-green-400"/>
      </div>
		  <div class="mb-10">
        <label class="text-gray-700">كلمة المرور</label>
        <input  type="password" name="password" class="w-full mx-auto border-b border-blue  focus:border-green-400  outline-none font-semibold mt-2 text-green-400"/>
      </div>
		  <a href="./add_user.php" class="text-red-600 hover:text-green-400 duration-200 ">انشاء حساب جديد </a>
      <div class="mx-auto mt-8 ">
			  <button name="login" type="submit"  class="rounded-md px-8 py-2 font-bold text-gray-700 border-2 border-gray
			  hover:text-green-400 hover:bg-gray-700 duration-500 cursor-pointer">
        تسجيل
			  </button>
		  </div>
	  </form>
    
  </div>
</div>


</body>

</html>