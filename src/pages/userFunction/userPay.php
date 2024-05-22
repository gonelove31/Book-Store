<?php
require_once("../database/database.php");
if(isset($_GET["UserID"])){
    $UserID = $_GET["UserID"];
}
$query_count = "SELECT COUNT(*) as tong from cart";


$result = $mysqli->query($query_count);
$row = mysqli_fetch_assoc($result);

$count = $row["tong"];


// Lay ra danh sach cart cua nguoi dung 

$query_count = "SELECT CartID from cart where UserID = $UserID";
$result = $mysqli->query($query_count);

$list_cart = array();
while ($row = $result->fetch_assoc()) {
    $list_cart[] = $row['CartID'];
}
$i = 0;
foreach ($list_cart as $value) {
    if (isset($_POST['submitPay'])) {
        $soluong = $_POST['soluong-' . $i];
        $cart = $value;
        $result3 = "UPDATE `cart` SET `SoLuongMua` = '$soluong' WHERE `cart`.`CartID` = $cart";
        $mysqli->query($result3);
        $i++;
    }
}

?>

<div class="bg-white rounded-md pb-2 ">
    <!-- Tạm tính Tổng giá -->
    <ul class="list-none m-0 py-[17px] px-[20px] border-b-[1px] border-solid">
        <li class="flex flex-none justify-between mb-[10px]">
            <div class="font-light text-gray-500 inline-block">
                Tạm tính
            </div>

            <div id="prePrice" class="font-normal inline-block">
                0
            </div>
        </li>

        <li class="flex flex-none justify-between mb-[10px]">
            <div class="font-light text-gray-500 inline-block">
                Giảm giá(%)
            </div>

            <div id="discount" class="font-normal inline-block">
                0
            </div>
        </li>

    </ul>

    <!-- Tổng tiền -->
    <div class="flex px-[20px] py-[17px] flex-nowrap justify-between m-0">
        <span class="inline-block font-light text-gray-500">Tổng tiền</span>

        <div class="text-right">
            <div id="finalCost" class="text-red-500 text-lg font-normal">
                Vui lòng chọn voucher
            </div>
            <!-- <div class="text-black-500 text-lg font-normal">
                    Vui lòng chọn sản phẩm
                </div> -->
            <p></p>
            <span class="font-light block text-xs mt-[3px]">
                (Đã bao gồm thuế VAT nếu có)
            </span>
        </div>
    </div>

</div>

<!-- href="./thanhdat_index.php?VoucherCode=1" -->

