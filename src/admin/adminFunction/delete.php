<?php
if (isset($_POST['saleid'])) {
    $id = $_POST['saleid'];
    require_once "../../database/database.php";
    $deletesql = "DELETE FROM sales WHERE SaleID = $id";
    var_dump($deletesql);
    $result = $mysqli->query($deletesql);
}

header("Location: ../trungdat_voucherList.php");
