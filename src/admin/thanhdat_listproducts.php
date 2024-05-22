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
  <link rel="stylesheet" href="./dist/output.css">
  <link rel="stylesheet" href="../../src/input.css">

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
          Dashboard
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Dashboard</a></span>
      </section>

      <!-- SECTION CONTENT-->
      <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
        <div class=" w-full p-5 bg-white flex justify-between gap-[20px] items-start">
          <h1 class="font-medium text-2xl">Danh sách đơn hàng của người dùng</h1>
        </div>
        </section>
      <!-- ALL SAN PHAM-->
        <div class="h-full">
             <table class="border-collapse w-full">
          <thead>
            <tr>
                <!-- <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">CartID</th> -->
                <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">UserName</th>
                <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">Address</th>
                <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">Account</th>
                <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">Phone</th>
                <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">ViewOrder</th>
                <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">Late_TimeOder</th>
                <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            include_once "../admin/AdminManage/list.php";
          ?>
              
          </tbody>
        </table>
          
        </div>
    </div>
    
  </div>
  </div>

  <?php
  include '../includes/footer.php';
  ?>
</body>

</html>