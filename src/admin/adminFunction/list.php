<?php
// require_once "./connect.php";
// include "../../database/database.php";
$listsql = "SELECT * FROM sales ORDER BY SaleID ASC";

$result = $mysqli->query($listsql);

while ($row = $result->fetch_assoc()) {
?>
    <tr class="bg-gray-100 border-b">
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            <?php echo $row["SaleID"];  ?>
        </td>
        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
            <?php echo $row["VoucherCode"];  ?>
        </td>
        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
            <?php echo $row["VoucherCount"];  ?>
        </td>
        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
            <?php echo $row["VoucherDiscount"];  ?>
        </td>
        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
            <?php echo $row["VoucherTime"];  ?>
        </td>
        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
            <form action="../../../src/admin/trungdat_voucherFix.php" method="post">
                <button class="py-2 px-4 bg-blue-400 text-red-600 rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50" type="submit">
                    Sua
                    <input type="hidden" name="SaleID" value="<?php echo $row["SaleID"]; ?>">
                </button>
            </form>
        </td>
        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
            <form action="../../../src/admin/trungdat_voucherDelete.php" method="post">
                <button class="py-2 px-4 bg-blue-400 text-red-600 rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50" type="submit">
                    Xoa
                    <input type="hidden" name="SaleID" value="<?php echo $row["SaleID"]; ?>">
                </button>
            </form>
        </td>
    </tr>

<?php
}


?>