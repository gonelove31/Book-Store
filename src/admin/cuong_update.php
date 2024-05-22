<?php
require "../auth/auth_admin.php";
require_once "../database/database.php";

$id = $_GET["sid"];

$sql = "select * from booktype where BookTypeID = $id";
$query = mysqli_query($mysqli, $sql);
$result1 = mysqli_fetch_assoc($query);
?>

<?php

$query = null;
$matchFound = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $BookTypeName = $_POST["BookTypeName"];
    if (!is_null($BookTypeName)) {
        $sql = "update booktype set BookTypeName = '$BookTypeName' where  BookTypeID = '$id' ";
        $query = mysqli_query($mysqli, $sql);
    } else {
        $query = false;
    }
} else {
    $query = null;
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
                    Dashboard
                </h1>
                <span class="basis-1/2 flex justify-end items-center"><a href="#">Home </a> / <a href="#"> Dashboard</a></span>
            </section>

            <!-- SECTION CONTENT-->
            <section class="content px-6 py-4 flex flex-col gap-3 bg-white">
                <div class=" w-full p-5 bg-white flex justify-between gap-[20px] items-start">
                    <h1>Sửa danh mục </h1>
                </div>

                <?php
                if ($query != null || is_bool($query)) {
                    echo  !$query ? "<div class=\"bg-red-100 border border-red-500 text-red-700 px-4 py-2 mb-4 rounded-md\">
                        Cập nhật thất bại
                    </div>" : " <div class=\"bg-green-100 border border-green-500 text-green-700 px-4 py-2 mb-4 rounded-md\">
                        Cập nhật thành công
                    </div>";
                }
                ?>
                <form method="POST" class="w-full max-w-sm">
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                BookTypeID
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <?php

                            echo "<input disabled value=" . $result1["BookTypeID"] . " name=\"BookTypeID\" class=\" disabled:opacity-75 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500\" id=\"inline-full-name\" type=\"text\" placeholder=\"Nhập BooktypeID\">"
                            ?>
                        </div>
                    </div>
                    <div class="md:flex md:items-center mb-6">
                        <div class="md:w-1/3">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                BookTypeName
                            </label>
                        </div>
                        <div class="md:w-2/3">
                            <?php
                            echo "<input value='" . $result1["BookTypeName"] . "' name=\"BookTypeName\" class=\"bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500\" id=\"inline-password\" placeholder=\"Nhập BooktypeName\">"
                            ?>

                        </div>
                    </div>

                    <div class="md:flex md:items-center">
                        <div class="md:w-1/3"></div>
                        <div class="md:w-2/3">
                            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                                Sửa
                            </button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <?php
    include '../includes/footer.php';
    ?>
</body>

</html>