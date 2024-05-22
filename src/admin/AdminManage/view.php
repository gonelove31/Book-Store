<script src="https://cdn.tailwindcss.com"></script>
<?php
require_once(__DIR__ . '../../../database/database.php');


if (isset($_GET['UserID'])) {
    $id = $_GET['UserID'];
}

$listsql = "SELECT TimeOder,cart.UserID,cart.CartID,products.ProductID,ProductName,cart.SoLuongMua,Price FROM products 
                            INNER JOIN cart ON cart.ProductID = products.ProductID
                            WHERE cart.UserID = $id";
                                   

$result = $mysqli->query($listsql);

$tongtien=0;

while ($row = $result->fetch_assoc()) {

    $thanhtien= $row['Price'] * $row['SoLuongMua'];
    $tongtien+=$thanhtien;
   
?>

        
    <tr class="bg-gray-100 border-b">
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row["ProductID"];  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row["ProductName"];  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row["SoLuongMua"];  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row['Price']*1000  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $thanhtien*1000  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row['TimeOder']  ?>
        </td>
        
        
         
      
    </tr>
    
<?php
}

    

// $mysqli->close();
?>

<tr>
              <th class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid " >Tổng tiền</th>
              <th colspan="5" class=" p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid"><?php echo $tongtien*1000;  ?></th>
                <th></th>
                <th></th>
            </tr>
