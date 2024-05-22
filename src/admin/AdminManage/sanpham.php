<?php
require_once(__DIR__ . '../../../database/database.php');

if (isset($_GET['UserID'])) {
    $id = $_GET['UserID'];
}
$listsql = "SELECT ProductName,Price,Image,SoLuongMua FROM products INNER JOIN cart ON products.ProductID = cart.ProductID where UserID = $id";

$result = $mysqli->query($listsql);

while ($row = $result->fetch_assoc()) {
?>
    <div class=" flex">
        <img src="../../Uploads/<?php echo $row["Image"];  ?>" alt="" class="w-12 h-12">
                <div class="">
                    <div class="w-full">
                        <span class="text-sm text-gray-500"><?php echo $row["ProductName"];  ?></span>
                    </div>
    
                    <div class="flex justify-between w-[448px]">
                        <div class="">
                            <span class="text-sm text-gray-500">SL: <?php echo $row["SoLuongMua"];  ?></span>
                        </div>
                        <div class="">
                            <span class="font-medium"><?php echo $row["Price"]*1000;  ?></span>
                        </div>
                    </div>
    
                </div>
    </div>
<?php
}


?>