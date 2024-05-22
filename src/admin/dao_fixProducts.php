<?php
if (isset($_GET['productName']) && $_GET['productID'] && $_GET['stt']) {
  $producID = $_GET['productID'];
  include('../database/database.php');
  $query = "SELECT * FROM Products where ProductID = $producID";
  $result = $mysqli->query($query);
?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../css/Nhom_14_Logo.png">
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
        <section class="bg-[#756d6d] p-8 content-hd  flex gap-2 my-[5px]">
          <h1 class="font-bold  text-2xl basis-1/2 flex justify-start items-center ">
            Bạn đang sửa sản phẩm có Tên là : <?php echo $_GET['productName'] . "<br>" .
                                                "và có Mã Sản Phẩm là: " . $_GET['productID'] ?>
          </h1>
          <span class="basis-1/2 flex justify-end items-center"><a href="./readAllProducts.php">Quay Lại </a> / <a href="#"> Sửa sản phẩm</a></span>
        </section>

        <!-- thong tin them san pham-->
        <div class="content px-6 py-4 flex flex-col gap-3 bg-red">
          <?php
          while ($row = $result->fetch_assoc()) {
          ?>
            <form method="POST" action="./Handel_products/HandelFixProducts.php" enctype="multipart/form-data">
              <table class="w-full max-w-full border-collapse border border-gray-300">
                <tbody>
                  <!-- lấy stt gửi đi để biết sản phẩm nào cần sửa  -->
                  <input style="display: none;" type="text" name="stt" value="<?php echo $row['stt'] ?>">
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Product ID</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="number" name="maSanPham" value="<?php echo $row['ProductID'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Product Name</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="text" name="tenSanPham" value="<?php echo $row['ProductName'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow "> Price</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="number" name="giaSanPham" value="<?php echo $row['Price'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Description</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300  line-clamp-6"><textarea class="w-1/3 h-28 resize-none" name="mota"><?php echo $row['Description'] ?> </textarea></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Publishing Company</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="text" name="nhaxuatban" value="<?php echo $row['PublishingCompany'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Issuing Company </th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="text" name="congtyphathanh" value="<?php echo $row['IssuingCompany'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Page Counts</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="number" name="sotrang" value="<?php echo $row['PageCounts'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Cover Type</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="text" name="loaibia" value="<?php echo $row['CoverType'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Old Price</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="number" name="giagoc" value="<?php echo $row['OldPrice'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Book Type ID</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="text" name="loaisach" value="<?php echo $row['BookTypeID'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Shop ID</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="number" name="shop" value="<?php echo $row['ShopID'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Star</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="number" name="star" value="<?php echo $row['Star'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Sell Number</th>
                    <td class="balign-top text-left reak-words px-4 py-2 border border-gray-300 "><input class="w-1/3" type="number" name="soluongban" value="<?php echo $row['sellNumber'] ?>"></td>
                  </tr>
                  <tr class="bg-gray-100 w-full text-[14px]">
                    <th class="text-[16px] align-top text-left break-words px-3 py-2 font-bold border border-gray-300 grow ">Image</th>
                    <td class="walign-top text-left -[90px] break-words px-4 py-2 border border-gray-300 "><input class="w-full" type="file" name="hinhanh"></td>
                  </tr>

                </tbody>
              </table>
              <button type="submit" class="bg-[#6fc5cd] text-lg  p-5 px-16 hover:bg-[red] mb-5 font-[500] ml-96 mt-5">Sửa lại</button>
            </form>
          <?php
          }
          ?>
          </ul>


        </div>
      </div>
    </div>


    <?php
    include '../includes/footer.php';
    ?>
  </body>

  </html>
<?php
} else {
  echo "Lỗi không tìm thấy sản phẩm cần sửa !";
}
?>