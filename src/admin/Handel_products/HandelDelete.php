<?php
include('../../database/database.php');
function delete($productId, $mysqli)
{
    $query_delete = "DELETE FROM products where  ProductID = $productId";
    if ($mysqli->query($query_delete) === true) {
        echo "xóa thành công<br>";
    } else {
        echo "lỗi khi xóa: " . $mysqli->error;
        echo "<br>";
    };
}
if (isset($_GET["productId"])) {
    $productId = $_GET["productId"];
    delete($productId, $mysqli);
} else {
    echo "ko lay dc hanh dong";
}
header("Location: ../dao_readAllProducts.php");
