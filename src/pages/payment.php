<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>
    <link rel="stylesheet" href="./dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="header">
        <div class="">
            <div class=" mx-32 px-4 py-4 flex">
                <div class="flex w-2/4 ">
                    <img src="../assets/img/image/d8211526b5bdc67aaaef2af9e8cf7dc8.png" class="w-[60px] h-[40px] mt-2 cursor-pointer">
                    
                </div>
                <div class=" w-2/4 flex justify-end">
                    <img src="../assets/img/image/hotline.png" class="w-44 h-14 cursor-pointer">
    
                </div>
        </div>
    </div>

    <div class=" px-5 pt-5   flex bg-[#f5f5fa]" >
        <!-- Phần bên trái -->
            <div class=" w-[700px] h-[521px] mr-[20px] mx-52 flex bg-white mb-5">
                <div class="">
                    <img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/tiki-mascot-congrat.svg">
                </div>
                <div class="ml-[40px]">
                    <div class="pt-[40px]">
                        <h1 class="flex justify-center items-center mb-[150px] font-medium text-3xl text-blue-500   ">Yay, đặt hàng thành công!</h1>
                    </div>
                    
                    
                    <div class="flex  items-center justify-center border border-cyan-200 ">
                        <a href="../pages/index.php">
                            <button class=" text-blue-500 bg-white  h-[44px] font-medium text-lg">Quay về trang chủ</button>
                        </a>
                    </div>
                </div>
                
            </div>
        <!-- kết thúc phần bên trái -->



            <!-- Phần bên phải -->
                <div class="w-[320px]">
                        <div class="bg-white p-4 mb-4">
                            <h3 class="font-medium text-sm mb-4">Mua sắm tiết kiệm hơn trên ứng dụng Tiki!</h3>
                            <div class="flex mx-4">
                                <img src="../assets/img/image/taive.png" class="w-[120px] h-[40px] mr-2">
                                <img src="../assets/img/image/chplay.png" class="w-[120px] h-[40px]">

                            </div>
                        </div>
            


                </div>
            <!-- Kết thúc phần bên phải -->
        </div>
    <!-- Kết thúc phần thân trang-->
    </div>
    <!--Phần đầu trang-->

    <div class=" pt-[40px] pb-[50px] bg-slate-200">
         <!-- Phần footer-->
         <div class="  px-[15px] mx-[126px] ">
            <div class="mb-1 text-gray-500 text-[11px] leading-4">Bằng việc tiến hành Đặt Mua, bạn đồng ý với các Điều kiện Giao dịch chung</div>
            <div class="flex items-center">
                <a href="#" class="pr-[12px] text-[11px] leading-4 ">Quy chế hoạt động</a>
                <i class="block w-[1px] h-[14px] mx-2 bg-slate-300"></i>
                <a href="#" class="pr-[12px] text-[11px] leading-4">Chính sách giải quyết khiếu nại</a>
                <i class="block  w-[1px] h-[14px] mx-2 bg-slate-300"></i>
                <a href="#" class="pr-[12px] text-[11px] leading-4">Chính sách bảo hành</a>
                <i class="block  w-[1px] h-[14px] mx-2 bg-slate-300"></i>
                <a href="#" class="pr-[12px] text-[11px] leading-4">Chính sách bảo mật thanh toán</a>
                <i class="block w-[1px] h-[14px] mx-2 bg-slate-300"></i>
                <a href="#" class="pr-[12px] text-[11px] leading-4">Chính sách bảo mật thông tin cá nhân</a>
            </div>
            <div class="text-gray-500 text-[11px] leading-4 mt-[18px] mx-0">© 2019 - Bản quyền của Công Ty Cổ Phần Ti Ki - Tiki.vn</div>

        </div>
    <!-- Kết thúc phần footer-->
    </div>


</body>
</html>

<!-- npx tailwindcss -i ./input.css -o ./dist/output.css --watch
    npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch
-->