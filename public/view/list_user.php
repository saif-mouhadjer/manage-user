<?php 
    require "./../../app/user/index.php";
    require "./../../app/user/search.php";
    require "./../../app/user/delete.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ادارة المستخدمين</title>
</head>
<body  style="background-color: #eee ;direction: rtl;">
    
    <section class=" p-3 sm:p-5 antialiased z-10 mt-2">
        <div class="bg-white  shadow-lg sm:rounded-lg ">
        <div class="flex justify-center items-center mt-10 ">
                <img src="./../image/users.png" alt="" class="absolute w-32 h-3w-24 bg-white p-1 border-2 border-white rounded-full ">
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
                            <input name="id_user" type="text" placeholder="البحث بواسطة رقم المستخدم" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pr-10 p-2   ">
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
                            <th scope="col" class="p-4">صورة </th>
                            <th scope="col" class="p-4">الاسم </th>
                            <th scope="col" class="p-4">اللقب </th>
                            <th scope="col" class="p-4">البريد الالكتروني </th>
                            <th scope="col" class="p-4">تاريخ ميلاد </th>
                            <th scope="col" class="p-4">رقم الهاتف</th>
                            <th scope="col" class="p-4">العمليات</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (mysqli_num_rows($user) == 0) {
                            echo "
                            <tr class='border-b hover:bg-gray-100'>
                                <div class='flex p-2  my-10 transform -translate-x-1/2  w-1/2   bg-red-300 rounded-lg border-2 border-red-900' >
                                    <div class='w-1/12'><img src='./../image/Danger.png' alt='' class='w-7'></div>
                                    <div class='w-11/12 text-center text-red-900 text-x font-bold'>
                                    لا يوجد مستخدمين
                                    </div>
                                </div>
                            </tr>
                                ";
                        }else{
                        
                        while ($row = mysqli_fetch_assoc($user)) {  
                            echo '
                        <tr class="border-b hover:bg-gray-100">
                            <th scope="row" class="px-4 py-3  text-gray-900 whitespace-nowrap ">
                                <div class=" mr-3 text-center">'.$row['id'].'</div>
                            </th>
                            <td class="px-4 text-center text-gray-900">
                            <img src="./../../app/image_user/'.$row['image'].'" alt="" class="w-20 h-20 rounded-full">
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['first_name'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['last_name'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['email'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['date_birth'].'
                            </td>
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap text-center">
                            '.$row['phone_number'].'
                            </td>
                            
                            <td class="px-4 py-3  text-gray-900 whitespace-nowrap ">
                                <div class="flex items-center justify-center space-x-4">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id" value="'.$row['id'].'">
                                        <button type="submit" name="b_delete" class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center  ">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2 " viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                            حذف
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>';}}?> 
                                            
                    </tbody>
                </table>
            </div>                
        </div>
            
    </section>
</body>
</html>