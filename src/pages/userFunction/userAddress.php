<?php
require_once("../database/database.php");
if(isset($_GET["UserID"])){
    $UserID = $_GET["UserID"];
}

$address = "SELECT UserName, phone, address FROM users WHERE UserID = $UserID";

$result = $mysqli->query($address);

$row = $result->fetch_assoc();
?>
<html>
<div class="w-full rounded-md p-4 mb-3 bg-white ">
    <div class="flex justify-between items-center mb-3">
        <h3 class="text-gray-400 text-lg">Giao tới</h3>
        <a href="" class="text-blue-600 text-[16px]">Thay đổi</a>
    </div>

    <div class="flex items-center mb-1">
        <p class="font-semibold">
            <?php echo $row["UserName"]; ?>
        </p>
        <i class="w-[1px] h-5 mx-2 bg-gray-200"></i>
        <p class="font-semibold">
            <?php echo $row["phone"]; ?>
        </p>
    </div>

    <div class="">
        <span class="text-green-600 bg-green-100 px-[6px] mr-1 font-medium text-xs leading-4 rounded-md inline-flex items-center">Nhà</span>
        <span class="font-normal text-gray-400 ">
            <?php echo $row["address"]; ?>
        </span>
        <p class="mt-3 text-sm text-gray-500 italic"></p>
    </div>
</div>

</html>




<?php
