<?php
// require_once "../voucherManage/voucherFix.php";
if (isset($_POST['saleid']) && isset($_POST['vouchercode']) && isset($_POST['vouchercount']) && isset($_POST['voucherdiscount']) && isset($_POST['vouchertime'])) {
    $id = $_POST['saleid'];
    $code = $_POST['vouchercode'];
    $count = $_POST['vouchercount'];
    $discount = $_POST['voucherdiscount'];
    $time = $_POST['vouchertime'];
}
echo $id;
echo $code . " " . $count . " " . $discount . " " . $time;
require_once "connect.php";

$fixsql = "UPDATE sales 
    SET VoucherCode='$code', VoucherCount=$count, VoucherDiscount=$discount, VoucherTime=$time
    WHERE SaleID = $id";

var_dump($fixsql);

$result = $mysqli->query($fixsql);

header("Location: ../trungdat_voucherList.php");
