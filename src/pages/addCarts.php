<?php
include('../database/database.php');
include("../auth/auth_user.php");
if (isset($_GET['productid'])) {
  $productid = $_GET['productid'];
  $soluongmua = $_POST['soluongmua'];
  $userid = $_SESSION['UserID'];
  date_default_timezone_set('Asia/Ho_Chi_Minh'); // Đặt múi giờ cho Việt Nam
  $currentDateTime = date('Y-m-d H:i:s');
  $query = "INSERT INTO cart(	ProductID,UserID,soluongmua,TimeOder) VALUES('$productid','$userid','$soluongmua','$currentDateTime');";
  if ($mysqli->query($query)) {
?>
    <!DOCTYPE html>
    <html>

    <head>
      <title>Xác nhận thêm sản phẩm vào giỏ hàng</title>
      <!-- Nạp các tệp CSS của Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>

      <div class="container mt-5 h-[500px]">
        <!-- Sử dụng lớp "alert alert-success" để tạo thông báo thành công -->
        <div class="alert alert-success rounded shadow-sm " role="alert">
          <h4 class="alert-heading">Sản phẩm đã được thêm vào giỏ hàng thành công!</h4>
          <p>Sản phẩm của bạn đã được thêm vào giỏ hàng thành công lúc: <?php echo $currentDateTime ?> .</p>
          <hr>
          <p class="mb-0">Bạn muốn tiếp tục mua sắm hoặc đi đến trang thanh toán?</p>
          <div class="mt-3">
            <a href="./index.php" class="btn btn-primary mr-2">Tiếp tục mua hàng</a>
            <a href="./main.php?UserID=<?php echo $userid ?>" class="btn btn-success">Đến trang thanh toán</a>
          </div>
        </div>
      </div>

      <!-- Nạp tệp JavaScript của Bootstrap (tùy chọn) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>
<?php
  } else {
    echo "loi :" . $mysqli->error;
  }
}


?>