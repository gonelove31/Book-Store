<?php
include "../auth/auth_admin.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Nhom_14_Logo.png">
    <!-- CDN font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CDN animate css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CDN tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- tippyCustom.css -->
    <link rel="stylesheet" href="../assets/css/tippyCustom.css" />

    <title>Admin Page</title>
</head>

<body>
    <div id="wapper" class="flex max-w-[100vw]">
        <!-- LEFT - Phần sidebar (menu bên trái) -->
        <?php
        include "./layout/navbar.php"
        ?>

        <!-- RIGHT - Phần content (nội dung chính) -->
        <div class="basis-auto w-[100%] bg-[#f4f6f9]">
            <nav class="p-4 flex items-center justify-between bg-white">
                <ul>
                    <li>
                        <i class="fa-solid fa-bars"></i>
                    </li>
                </ul>
                <ul class="flex gap-3">
                    <li>
                        <span>Xin chào, </span>
                    </li>
                    <li><i class="fa-regular fa-bell"></i></li>
                </ul>
            </nav>
            <!--  -->
            <section class="p-8 content-hd h-[34px] flex gap-2 my-[5px]">
                <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center">
                    Quản lý danh mục
                </h1>
                <!-- <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Dashboard</a></span> -->
            </section>

            <!-- SECTION CONTENT-->
            <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="px-6 py-4">
                        <h2 class="text-xl font-bold mb-2">Book List</h2>
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th class="px-4 py-2 ">BookTypeID</th>
                                        <th class="px-4 py-2">BookTypeName</th>
                                        <th class="px-4 py-2">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-300">
                                    <?php


                                    require_once "../database/database.php";
                                    $sql = "select * from booktype";
                                    $query = mysqli_query($mysqli, $sql);

                                    while ($result = mysqli_fetch_assoc($query)) {
                                        echo
                                        " <tr >
                                                <td class=\"px-4 py-2 flex items-center justify-center\">" .  $result["BookTypeID"] . "</td>
                                                <td class=\"px-4 py-2 \"> " . $result["BookTypeName"] .  "</td>
                                                <td class=\"px-4 py-2 flex justify-center\">
                                                    <a  href=\"cuong_update.php?sid=" . $result["BookTypeID"] . "\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2\">Sửa</a>
                                                </td>
                                            </tr> ";
                                    };

                                    ?>


                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>