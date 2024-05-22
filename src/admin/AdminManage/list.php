<?php
require_once(__DIR__ . '../../../database/database.php');

// if (isset($_POST['UserID'])) {
//     $id = $_POST['UserID'];
// }

$listsql = "SELECT UserID,UserName,address,email,phone FROM users where UserID!=2";
             

$result = $mysqli->query($listsql);

while ($row = $result->fetch_assoc()) {
    $id=$row['UserID'];
    $Timesql = "SELECT TimeOder FROM cart WHERE UserID = $id ORDER BY TimeOder DESC
    LIMIT 1;";
    $Time=$mysqli->query($Timesql);
    $row_time=$Time->fetch_assoc();
?>
    <tr class="bg-gray-100 border-b">
        
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row["UserName"];  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row["address"];  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row["email"];  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <?php echo $row["phone"];  ?>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
        <a href="./thanhdat_viewproducts.php?action=products&query=xemdonhang&UserID=<?php echo $row['UserID']?>">Xem đơn hàng 
        </a>
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
        <?php echo $row_time['TimeOder']?>
      
        </td>
        <td class="p-[10px] border border-gray-400 bg-[#f2f2f2] border-solid">
            <form action="./AdminManage/deleteproducts.php" method="get">
                <button class="mb-2 md:mb-0 bg-blue-500 border border-blue-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">
                                        Delete
                    <input type="hidden" name="UserID" value="<?php echo $row["UserID"]; ?>">
                 </button>
            </form>
            
        </td>
    </tr>

<?php
}

$mysqli->close();
?>