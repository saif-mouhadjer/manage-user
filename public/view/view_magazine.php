<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        header("Location: home.php");
    }
    require "./../../app/magazine/index.php";
    require "./../../app/magazine/search.php";
    require "./../../app/user/logout.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> المجلات</title>
</head>

<body style="direction: rtl; background-color: #eee;">

<section class=" p-3 sm:p-5 antialiased z-10">
    <div class="flex justify-between">
        <div class="mx-auto mt-5 inline-block transition duration-500 transform hover:translate-x-4">
            <a href="./show_user.php" type="submit" class="rounded-md px-8 py-2 font-bold text-gray-700 border-2 border-gray bg-green-400 cursor-pointer">
                <img src="./../image/arrow.png" class="w-7 inline-block">
                 الملف الشخصي 
            </a>
        </div>
        <form action="" method="POST" class="mx-auto mt-5 inline-block transition duration-500 transform hover:-translate-x-4">
            <button name="log_out" type="submit" class="rounded-md px-8 py-2 font-bold text-gray-700 border-2 border-gray bg-red-400 cursor-pointer">
                تسجيل الخروج
                <img src="./../image/arrow.png" class="w-7 inline-block rotate-180">
            </button>
        </form>
    </div>
    <div class="bg-white  shadow-lg sm:rounded-lg ">
        <div class="flex justify-center items-center mt-10 ">
                <img src="./../image/magazine.png" alt="" class="absolute w-32 h-3w-24 bg-white p-1 border-2 border-white rounded-full ">
            </div>
            <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4  mt-16">
                <div class="w-full md:w-1/2">
                    <form method="POST" action="" class="flex items-center">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                                </svg>
                            </div>
                            <input name="id_magazine" type="text" placeholder="البحث بواسطة رقم المجلة" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pr-10 p-2   ">
                        </div>
                        <button name="search" class="border-2 border-black px-4 py-1 mr-2 rounded-lg text-black bg-white hover:bg-black hover:text-white">بحث</button>
                    </form>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 ">
                    <thead class="text-xs text-white uppercase bg-gray-700  ">
                        <tr class="text-center">
                            <th scope="col" class="p-4">الرقم </th>
                            <th scope="col" class="p-4">العنوان </th>
                            <th scope="col" class="p-4">المؤلف </th>
                            <th scope="col" class="p-4">عدد الصفحات </th>
                            <th scope="col" class="p-4"> السعر </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (mysqli_num_rows($magazine) == 0) {
                            echo "
                            <tr class='border-b hover:bg-gray-100'>
                                <div class='flex p-2  my-10 transform -translate-x-1/2  w-1/2   bg-red-300 rounded-lg border-2 border-red-900' >
                                    <div class='w-1/12'><img src='./../image/Danger.png' alt='' class='w-7'></div>
                                    <div class='w-11/12 text-center text-red-900 text-x font-bold'>
                                    لا توجد مجلات
                                    </div>
                                </div>
                            </tr>
                                ";
                        }else{
                        
                        while ($row = mysqli_fetch_assoc($magazine)) {  
                            echo '
                        <tr class="border-b hover:bg-gray-100">
                            <th scope="row" class="px-4 py-3  text-gray-900 whitespace-nowrap ">
                                <div class=" mr-3 text-center">'.$row['id'].'</div>
                            </th>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['title'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['author'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['number_pages'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['price'].'
                                                       
                        </tr>';}}?> 
                                            
                    </tbody>
                </table>
            </div>                
        </div>
            
    </section>
    
</body>

</html>