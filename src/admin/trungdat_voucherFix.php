<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hien thi voucher</title>
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
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
                    Dashboard
                </h1>
                <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#">
                        Dashboard</a></span>
            </section>

            <!-- SECTION CONTENT-->

            <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
                <!-- component -->
                <div class="flex items-center justify-center bg-gray-100">
                    <div class=" w-full p-6 bg-white ">
                        <form action="./adminFunction/fixmain.php" method="POST">
                            <!-- <div class="mb-6">
                                <label for="confirmPassword" class="block mb-2 text-sm text-gray-600">SaleID</label>
                                <input type="text" id="confirmPassword" name="confirmPassword" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div> -->
                            <div class="mb-4">
                                <label for="nombre" class="block mb-2 text-sm text-gray-600">Voucher Code</label>
                                <input type="text" id="nombre" name="vouchercode" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="apellido" class="block mb-2 text-sm text-gray-600">Voucher Count</label>
                                <input type="text" id="apellido" name="vouchercount" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block mb-2 text-sm text-gray-600">Voucher Discount</label>
                                <input type="text" id="email" name="voucherdiscount" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="block mb-2 text-sm text-gray-600">VoucherTime</label>
                                <input type="text" id="password" name="vouchertime" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                            </div>
                            <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mb-2">
                                Fix
                                <input type="hidden" name="saleid" value="<?php echo $_POST['SaleID']; ?>">
                            </button>
                        </form>

                    </div>
                </div>
        </div>
        </section>
    </div>

</body>

</html>