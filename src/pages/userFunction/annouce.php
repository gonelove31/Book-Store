
<?php

    // Tệp tồn tại, thực hiện các hành động cần thiết
    require_once("../../database/database.php");



if (isset($_POST['value'])) {
    $vouchercode = $_POST['value'];
    $voucher = "SELECT VoucherCode, VoucherDiscount FROM sales WHERE VoucherCode = '$vouchercode' ";
    $result = $mysqli->query($voucher);
    if ($mysqli->affected_rows > 0) {
        $message = "Áp dụng Voucher thành công";
        $row = $result->fetch_assoc();
        $discount = $row['VoucherDiscount'];
    } else {
        $message = "Mã khuyến mãi không hợp lệ";
        $discount = 0;
    }
    // echo $message;
    // echo $discount;
    $kq = array(
        "value1" => $message,
        "value2" => $discount,
        "value3" => $vouchercode
    );
    // echo $kq;
    header('Content-Type: application/json');
    echo json_encode($kq);
    // header("Location: userPay.php?value=" . urlencode($discount));
} else {
    $vouchercode = 0;
    echo "Không có dữ liệu được gửi đến.";
}
