<?php
include(__DIR__ . '../../../database/database.php');
$id=isset($_GET['UserID']);
$listsql = "SELECT * FROM users where UserID = $id ;
                               ";

$result = $mysqli->query($listsql);

while ($row = $result->fetch_assoc()) {
?>
    <div class="p-4 bg-white mb-3 ">
        <div class="flex justify-between">
                        <h3 class="font-normal m-0 text-gray-500 ">Giao tới</h3>
                        <a class=" text-blue-500 cursor-pointer" href="#">Thay đổi</a>
        </div>
        <div class="flex">
                        <p class="m-0 font-semibold"><?php echo $row["UserName"];  ?></p>
                        <i class="block h-[15px] w-[1px] mx-2 bg-slate-100"></i>
                        <p class="m-0 font-semibold"><?php echo $row["phone"];  ?></p>
        </div>
        <div class="flex">
                        <span class="font-medium text-[12px] leading-4 px-[6px] mr-1 h-[18px] inline-flex items-center text-green-500 bg-slate-100">Nhà</span>
                       <p><?php echo $row["address"];  ?></p> 
        </div>
    </div>
<?php
}


?>