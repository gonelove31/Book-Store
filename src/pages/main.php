<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../dist/output.css">
    <title>Giỏ hàng</title>

</head>

<body>


    <form action="" method="post">
        <div class="grid grid-cols-6 gap-5 bg-gray-100 px-4  py-5">
            <!-- Bên trái -->
            <div class="  col-span-4">
                <div class="mb-5">
                    <h4 class="font-medium text-xl leading-7">GIỎ HÀNG</h4>
                </div>

                <!--  tiêu đề  -->
                <div class="w-full flex items-center px-[16px] py-[9px] gap bg-white rounded-md mb-3 sticky top-0  ">
                    <!-- <div class="w-[5%] h-[21px] flex items-center">
            <input type="checkbox" name="" id="" class="w-[18px] h-[18px] font-thin mr-3">
        </div> -->
                    <div class="w-[35%]">
                        <span class="text-[14px] pl-10">Tất cả</span>
                    </div>
                    <div class=" text-[14px] w-[20%] leading-5">Đơn giá
                    </div>
                    <div class="text-[14px] w-[15%]">Số lượng</div>
                    <div class="text-[14px] w-[15%]">Thành tiền</div>
                    <div class="w-[10%] flex justify-end">
                        <svg class="w-[17px] h-[17px] text-gray-300 dark:text-white cursor-pointer " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                        </svg>
                    </div>
                </div>

                <!-- San pham -->
                <?php
                
                   require_once("../database/database.php");

                   
                ?>
                <?php include_once("./userFunction/userList.php"); ?>
                
            </div>
            
            <!-- Bên phải -->
            <div class="col-span-2 bg-gray-100 mt-[48px]">
                
                <!-- Giao tới -->
                <?php include_once("./userFunction/userAddress.php"); ?>

                <!-- Tiki Khuyen mai -->
                <a    id="submitPay"  name="submitPay"  class="bg-red-500 text-white text-center py-[13px] rounded-md border-none w-full block mt-[15px] cursor-pointer">
<!-- <input type="hidden" name="submitPay"> -->
    
    
    Mua hàng




</a>
<?php
if(isset($_GET["UserID"])){
    $UserID = $_GET["UserID"];
   echo $UserID;
}
?>
<input style="display: none;" id="userid" type="text" value="<?php echo$UserID?>">
                <?php include_once("./userFunction/userVoucher.php"); ?>
   
                <!-- Thanh toán -->
                <?php include_once("./userFunction/userPay.php"); ?>

            </div>
        </div>

    </form>









</body>

</html>