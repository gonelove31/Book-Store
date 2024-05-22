<?php

include('../database/database.php');
$query = "SELECT * FROM Products";
$result = $mysqli->query($query);

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
  <link rel="stylesheet" href="../../assets/css/tippyCustom.css" />

  <title>Admin Page</title>
</head>

<body>
  <div id="wapper" class="flex max-w-[100vw]">
    <!-- LEFT - Phần sidebar (menu bên trái) -->
    <?php
    include "./layout/navbar.php"
    ?>

    <!-- RIGHT - Phần content (nội dung chính) -->
    <div class="content  max-w-full  px-6 py-4 flex flex-col gap-3 bg-white">
      <!-- Users Table -->
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
      <section class="bg-[#756d6d] p-8 content-hd h-[34px] flex gap-2 my-[5px]">
        <h1 class="font-bold text-2xl basis-1/2 flex justify-start items-center ">
          DANH SÁCH SẢN PHẨM
        </h1>
        <span class="basis-1/2 flex justify-end items-center"><a href="../admin.php">Home </a> / <a href="#"> Danh Sách Sản Phẩm </a></span>
      </section>
      <div class="w-full p-2 bg-white flex flex-col justify-between gap-[20px] items-start">
        <!-- <form method="POST"> -->
        <table class="w-full max-w-full border-collapse border border-gray-300">
          <thead>
            <tr class="bg-gray-100 w-full text-[14px]">
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Product ID</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Product Name</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow "> Price</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Description</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Publishing Company</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Issuing Company</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Page Counts</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Cover Type</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Old Price</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Book Type ID</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Shop ID</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Star</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Sell Number</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">image</th>
              <th class="break-words px-3 py-2 font-bold border border-gray-300 grow ">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {

            ?>
              <!-- render productslist -->
              <tr class="bg-gray-200 hover:bg-gray-300 flexbreak-normal">
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['ProductID']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['ProductName']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['Price']; ?></td>
                <td class="w-[150px] break-words px-4 py-2 border border-gray-300  line-clamp-6"><?php echo $row['Description']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['PublishingCompany']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['IssuingCompany']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['PageCounts']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['CoverType']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['OldPrice']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['BookTypeID']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['ShopID']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['Star']; ?></td>
                <td class="break-words px-4 py-2 border border-gray-300 "><?php echo $row['sellNumber']; ?></td>
                <td class="w-[90px] break-words px-4 py-2 border border-gray-300 ">

                  <!-- đường dẫn ảnh ở đây tính từ file nào render lên  -->
                  <img class="w-[100px] mb-[10px]" src="../../Uploads/<?php echo $row['Image']; ?>">
                </td>
                <td class="pl-5 border border-gray-300  gap-[10px] ">
                  <!-- Edit -->
                  <a href="./dao_fixProducts.php?productName=<?php echo $row['ProductName'] ?>&productID=<?php echo $row['ProductID'] ?>&stt=<?php echo $row['stt'] ?>
                    " class="block mb-4 ">
                    <i class="fa-solid fa-edit text-[22px] hover:bg-emerald-200"></i>
                  </a>

                  <!-- DEL -->

                  <a href="./Handel_products/HandelDelete.php?action=delete&productId=<?php echo $row['ProductID'] ?>" onclick="return  confirm('Bạn chắc chắn muốn xóa sản phẩm này')" class="block">
                    <i class="fa-solid fa-trash-can text-[22px] hover:bg-[red]"></i>
                  </a>

                </td>


              <?php
            }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <?php
  include '../includes/footer.php';
  ?>

</body>

</html>