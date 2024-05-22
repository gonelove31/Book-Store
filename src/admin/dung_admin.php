<?php
require "./dung_user.controller.php";
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

  <!-- CDN tailwind  -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/tippyCustom.css" />

  <title>Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw]">
    <!-- LEFT -->

    <?php
    include "./layout/navbar.php"
    ?>

    <!-- RIGHT -->
    <div class="basis-auto w-[100%] bg-[#f4f6f9]">
      <nav class="p-4 flex items-center justify-between bg-white">
        <ul>
          <li>
            <i class="fa-solid fa-bars"></i>
          </li>
        </ul>
        <ul class="flex gap-3">
          <li>
            <span>Xin chào, <?php echo $_SESSION["UserName"] ?></span>
          </li>
          <li><i class="fa-regular fa-bell"></i></li>
        </ul>
      </nav>

      <section class="p-8 content-hd h-[34px] flex gap-2 my-[5px]">
        <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center">
          Dashboard
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Dashboard</a></span>
      </section>

      <!-- SECTION CONTENT 1 -->
      <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
        <div class=" w-full p-5 bg-white flex justify-between gap-[20px] items-start">
          <!-- Item 1 -->
          <div class="card animate__animated animate__fadeInDown bg-[#1f2937] rounded-[10px] overflow-hidden">
            <div class="card-body flex justify-between p-4 m-[10px]">
              <div class="basis-2/3 text-[#bec8d5] ">
                <p class="text-[32px] font-bold pt-[3px]"><?php echo getDataForDashboard($mysqli, "users");  ?></p>
                <p class="pr-[15px]">Số lượng <br> tài khoản</p>
              </div>
              <div class="basis-1/3 ">
                <button class="p-4 px-[17px] bg-[#253041] rounded-3xl">
                  <a href="./user_list.php"><i class="fa-solid fa-users-gear text-[32px] text-[#bec8d5]"></i></a>
                </button>
              </div>
            </div>
            <div class="card-footer bg-[#253041] text-[#bec8d5] py-[10px] px-[20px]">
              <a href="./user_list.php">View all <i class="fa-solid fa-circle-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./Item1 -->
        </div>
      </section>

      
    </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>
</body>

</html>