<!-- PHP -->
<?php
session_start();
require('../database/database.php');
require "../utils/utils.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
      if (Authentication($mysqli, $email, $password)) {
        Authorization($mysqli, $email);
        if ($_SESSION['role']  == 0) {
          header("Location: ./index.php");
          exit();
        } else {
          header("Location: ../admin/dung_admin.php");
          exit();
        }
      } else {
        $message = "Sai email hoặc mật khẩu!";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }
    } else {
      $message = "Vui lòng điền đầy đủ thông tin!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
}

$mysqli->close();
?>
<!-- HTML -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">


  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Nhom_14_Logo.png">
  <!-- Include Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/tippyCustom.css">
  <title>Login</title>
</head>

<body>
  <!-- Main container -->
  <div id="main">
    <div class="m-0 p-0 box-border">
      <div class="flex min-h-screen w-full md:items-center justify-center font-sans backdrop-opacity-10 backdrop-invert bg-white">
        <div class="box-border md:rounded-3xl overflow-hidden md:mb-6 m-w-[800px] w-[800px] flex shadow-l5">
          <div class="md:basis-2/3 xl:p-10 xl:pb-7 p-5 bg-white md:rounded-l-2xl">
            <img class="block md:hidden" src="https://salt.tikicdn.com/ts/upload/38/1a/0c/c9160ec942ae0348aae9bdad444f6ac5.jpg" alt="login" />
            <span class="mb-10 text-2xl font-medium">Xin chào,</span>
            <p class="mb-5">Nhập email và mật khẩu để đăng nhập</p>

            <!--  Form login user-->

            <form method="POST" autocomplete="off">
              <input type="text" name="email" maxlength="255" placeholder="Nhập email" class="w-full py-3 border-b border-gray-300 text-2xl text-gray-700 outline-none" />
              <input type="password" name="password" placeholder="Nhập mật khẩu" class="w-full py-3 border-b border-gray-300 text-2xl text-gray-700 outline-none" />
              <button class="mt-8 mb-3 outline-none rounded-md bg-red-500 py-3 w-full text-white border-none text-[20px] cursor-pointer hover:opacity-80">
                Đăng nhập
              </button>
            </form>
            <p class="text-center text-blue-500 cursor-pointer">
              <a href="./register.php">Đăng ký tài khoản mới</a>
            </p>
            <!-- Social  -->
            <div class="mt-16">
              <div class="relative flex justify-center">
                <span class="relative bg-white px-8 social-heading text-center text-gray-500 z-20">
                  Hoặc tiếp tục bằng
                </span>
                <div class="absolute left-0 top-1/2 transform -translate-y-1/2 w-full h-px bg-gray-200 z-0"></div>
              </div>
              <ul class="flex justify-center mt-4 mb-3">
                <li class="mx-[10px] cursor-pointer">
                  <img class="w-[58px]" src="https://salt.tikicdn.com/ts/upload/3a/22/45/0f04dc6e4ed55fa62dcb305fd337db6c.png" alt="facebook" />
                </li>
                <li class="mx-[10px] cursor-pointer">
                  <img class="w-[58px]" src="https://salt.tikicdn.com/ts/upload/1c/ac/e8/141c68302262747f5988df2aae7eb161.png" alt="google" />
                </li>
              </ul>
              <p class="text-gray-500 text-xs">
                Bằng việc tiếp tục, bạn đã đọc và đồng ý với
                <u>điều khoản sử dụng</u> và <br />
                <u>Chính sách bảo mật thông tin cá nhân</u> của chúng tôi.
              </p>
            </div>
          </div>
          <div class="md:basis-1/3 basis-0 hidden bg-[#ebf6ff] md:flex flex-col items-center justify-center">
            <img src="https://salt.tikicdn.com/ts/upload/eb/f3/a3/25b2ccba8f33a5157f161b6a50f64a60.png" width="203" />
            <div class="content mt-7">
              <h4 class="text-[#0B74E5] font-medium text-base">
                Mua sắm ngay
              </h4>
              <span class="text-[#0B74E5] font-medium text-sm">Siêu ưu đãi mỗi ngày</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="footer">
    <?php
    include "../includes/footer.php";
    ?>
  </div>
</body>

</html>