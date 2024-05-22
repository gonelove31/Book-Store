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
    <link rel="stylesheet" href="../dist/output.css">
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
                    Dashboard
                </h1>
                <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Dashboard</a></span>
            </section>

            <!-- SECTION CONTENT-->
            <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
                <div class=" w-full p-5 bg-white flex justify-between gap-[20px] items-start">
                    <div class="p-8 rounded border border-gray-200 w-full">
                        <h1 class="font-medium text-3xl">Add Voucher</h1>
                        <!-- <p class="text-gray-600 mt-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos dolorem vel cupiditate laudantium dicta.</p> -->
                        <form action="./adminFunction/addVoucher.php" method="post">
                            <div class="mt-8 grid lg:grid-cols-2 gap-4">
                                <!-- Nhập voucher code -->
                                <div>
                                    <label for="vouchercode" class="text-sm text-gray-700 block mb-1 font-medium">VoucherCode</label>
                                    <input type="text" name="vouchercode" id="vouchercode" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Code" />
                                </div>

                                <!-- Nhập số lượng voucher -->
                                <div>
                                    <label for="vouchercount" class="text-sm text-gray-700 block mb-1 font-medium">VoucherCount</label>
                                    <input type="text" name="vouchercount" id="vouchercount" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Number" />
                                </div>

                                <!-- Nhập giảm giá -->
                                <div>
                                    <label for="voucherdiscount" class="text-sm text-gray-700 block mb-1 font-medium">VoucherDiscount</label>
                                    <input type="text" name="voucherdiscount" id="voucherdiscount" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Sales" />
                                </div>

                                <!-- Nhập thời hạn voucher -->
                                <div>
                                    <label for="vouchertime" class="text-sm text-gray-700 block mb-1 font-medium">VoucherTime</label>
                                    <input type="text" name="vouchertime" id="vouchertime" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full" placeholder="Date" />
                                </div>
                            </div>
                            <!-- Nút kích hoạt -->
                            <div class="space-x-4 mt-8">
                                <!-- Ok -->
                                <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
                                <!-- Hủy -->
                                <button type="button" class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        </section>
    </div>

</body>

</html>