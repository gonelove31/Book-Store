<?php
//nhan du lieu tu form
$code = $_POST['vouchercode'];
$count = $_POST['vouchercount'];
$discount = $_POST['voucherdiscount'];
$time = $_POST['vouchertime'];

//ket noi csdl
require_once "connect.php";

//lenh sql them du lieu
$addsql = "INSERT INTO sales(VoucherCode, VoucherCount, VoucherDiscount, VoucherTime)
VALUES ('$code', $count, $discount, $time)";

//thuc thi cau lenh tren 
mysqli_query($mysqli, $addsql);

// $statement = $mysqli->prepare($addsql);


header("Location: ../trungdat_voucherList.php");   

// if ($statement->execute()) {
//     echo "<div style=color:green>";
//     echo "Thực hiện thành công";
//     echo "</div>";
// }
