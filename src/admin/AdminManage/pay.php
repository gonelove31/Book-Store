
<?php
require_once(__DIR__ . '../../../database/database.php');



if (isset($_GET['UserID'])) {
    $id = $_GET['UserID'];

}
$listsql = "SELECT cart.UserID,cart.SoLuongMua,Price FROM products 
                            INNER JOIN cart ON cart.ProductID = products.ProductID
                            WHERE cart.UserID = $id";
                                   
$voucher = $_GET["VoucherCode"];
$listsql2 = "SELECT VoucherCount FROM sales 
                            WHERE VoucherCode = '$voucher'";

$result2 = $mysqli->query($listsql2);
$result = $mysqli->query($listsql);
$row2=$result2->fetch_assoc();

$tongtien=0;
$i = 0;
while ($row = $result->fetch_assoc()) {
    $i++;
    $thanhtien= $row['Price'] * $row['SoLuongMua'];
    $tongtien+=$thanhtien;
   
?>
<?php
if (isset($_GET['UserID'])) {
    $id = $_GET['UserID'];
}

$listsql = "SELECT cart.UserID,cart.CartID,products.ProductID,ProductName,cart.SoLuongMua,Price FROM products 
                            INNER JOIN cart ON cart.ProductID = products.ProductID
                            WHERE cart.UserID = $id";
                                   

$result = $mysqli->query($listsql);

$tongtien=0;

while ($row = $result->fetch_assoc()) {

    $thanhtien= $row['Price'] * $row['SoLuongMua'];
    $tongtien+=$thanhtien;
}
?>

        

<?php
$tongtien = $tongtien-$tongtien  * $row2['VoucherCount']/100;
}

    

// $mysqli->close();
?>
                <div class="p-4 bg-white mb-3">
                    <div class="">
                        <div class="flex justify-between mb-1">
                            <h3 class="font-medium m-0">Đơn hàng</h3>
                            <a class=" text-blue-500 cursor-pointer " href="../">Thay đổi</a>
                        </div>
                        <div class="flex items-center">
                            <p class="font-normal mr-1 text-gray-500"><?php echo $i;  ?> sản phẩm</p>
                            <p class="font-normal m-0 text-blue-500 flex items-center cursor-pointer">Xem thông tin</p>
                            <svg class="sub-title-link__arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.96967 8.46967C10.2626 8.17678 10.7374 8.17678 11.0303 8.46967L14.0303 11.4697C14.3232 11.7626 14.3232 12.2374 14.0303 12.5303L11.0303 15.5303C10.7374 15.8232 10.2626 15.8232 9.96967 15.5303C9.67678 15.2374 9.67678 14.7626 9.96967 14.4697L12.4393 12L9.96967 9.53033C9.67678 9.23744 9.67678 8.76256 9.96967 8.46967Z" fill="#0B74E5"></path></svg>
                        </div>
                    </div>

                    <div class="">
                        <div class="flex justify-between">
                            <div class="flex items-center text-gray-500 ">Tạm tính</div>
                            <div class="text-sm flex items-center">
                            <?php echo $tongtien * 1000  ?>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-center text-gray-500 ">Phí vận chuyển</div>
                            <div class="text-sm flex items-center">15000 đ </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-center text-gray-500 ">Khuyến mãi vận chuyển</div>
                            <div class="text-sm flex items-center text-green-400">-15.000 ₫</div>
                        </div>
                    </div>
                    <div class="  flex justify-between ite">
                        <div class="text-sm flex items-center">Tổng tiền</div>
                        <div class="text-[20px] leading-8 text-red-500 font-medium">
                        <?php echo $tongtien * 1000 - 15000  ?>
                        </div>
                    </div>
                    <div class="px-4 pb-[12px] font-semibold flex">
                        <img src="../assets/img/image/freeship.png" class="w-[81px] h-[12px] mt-[6px] mr-1 "> 
                        <span class="font-semibold">đã được áp dụng!</span>
                    </div>
                    <a href="./payment.php?UserID=<?php echo$id?>">
                        <button class="py-[1px] px-[6px] mx-4 mb-4 text-white bg-red-500 h-[44px] w-[260px] flex justify-center items-center cursor-pointer text-base rounded" type="button">Đặt hàng</button>

                    </a>
                    
                </div>


