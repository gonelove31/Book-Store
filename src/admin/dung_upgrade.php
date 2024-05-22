<?php
if (isset($_GET['UserID'])) {
  $UserID = $_GET['UserID'];
  include("./dung_user.controller.php");
  include '../database/database.php';

  $userList = getUserList($mysqli);
  $userToUpdate = null;

  foreach ($userList as $user) {
    if ($user['UserID'] == $UserID) {
      $userToUpdate = $user;
      break;
    }
  }

  // var_dump($userToUpdate);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $userToUpdate) {
  $userName = $_POST['UserName'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['isAdmin'];

  $userToUpdate['role'] = $role;

  $query = "UPDATE users SET UserName=?, phone=?, address=?, email=?, password=?, role=? WHERE UserID=?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("sssssis", $userName, $phone, $address, $email, $password, $role, $UserID);

  // echo "SQL statement: " . $userToUpdate['role'];

  if ($stmt->execute()) {
    header("Location: dung_user_list.php");
    exit();
  } else {
    echo "Có lỗi xảy ra khi cập nhật thông tin";
    var_dump($userToUpdate);
  }

  $stmt->close();
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Nhom_14_Logo.png">
  <!-- CDN font-awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CDN animate css  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- CDN tailwind css -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- tippyCustom.css -->
  <link rel="stylesheet" href="../assets/css/tippyCustom.css" />

  <title>Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw]">
    <!-- LEFT - Phần sidebar (menu bên trái) -->
    <?php
    include "./layout/navbar.php"
    ?>

    <!-- RIGHT - Phần content (nội dung chính) -->
    <div class="basis-auto w-[100%] bg-[#f4f6f9]">
      <nav class="p-4 flex items-center justify-between bg-white">
        <ul>
          <li>
            <i class="fa-solid fa-bars"></i>
          </li>
        </ul>
        <ul class="flex gap-3">
          <li>
            <span>Xin chào, </span>
          </li>
          <li><i class="fa-regular fa-bell"></i></li>
        </ul>
      </nav>
      <!--  -->
      <section class="p-8 content-hd h-[34px] flex gap-2 my-[5px]">
        <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center">
          Thông tin tài khoản
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="./admin.php">Home </a> / <a href="#"> Sửa thông tin người dùng</a></span>
      </section>

      <!-- SECTION CONTENT-->
      <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
        <div class=" w-full p-5 bg-white ">
          <?php if ($userToUpdate) { ?>

            <body>
              <!-- NEW -->
              <form method="POST" class="bg-white rounded-xl dark:bg-gray-900" autocomplete="off">
                <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
                  <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Sửa thông tin người dùng</h2>
                  <form action="#">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                      <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
                        <input type="text" name="UserName" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" value="<?php echo $userToUpdate['UserName']; ?>" placeholder="Type user name" required>
                      </div>
                      <div class="w-full">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Phone Number" required value="<?php echo $userToUpdate['phone']; ?>">
                      </div>
                      <div class="w-full">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <input type="text" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="address" name="address" required value="<?php echo $userToUpdate['address']; ?>">
                      </div>
                      <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" name="email" required value="<?php echo $userToUpdate['email']; ?>">
                      </div>
                      <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="text" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Password" name="password" required value="<?php echo $userToUpdate['password']; ?>">
                      </div>
                      <div class="sm:col-span-2">
                        <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phân quyền</label>

                        <select id="is-admin" name="isAdmin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                          <option value="1" <?php echo ($userToUpdate['role'] == 1) ? 'selected' : ''; ?>>Admin</option>
                          <option value="0" <?php echo ($userToUpdate['role'] == 0) ? 'selected' : ''; ?>>User</option>
                        </select>
                      </div>
                    </div>
                    <div class="flex items-center space-x-4">
                      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Lưu thay đổi
                      </button>

                    </div>
                  </form>
                </div>

            </body>

          <?php } else {
            echo "User không tồn tại";
            // var_dump($userToUpdate);
          }
          ?>
        </div>
    </div>
    </section>
  </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>
</body>

</html>