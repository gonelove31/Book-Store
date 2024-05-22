<?php
if (isset($_GET['UserID'])) {
    $id = $_GET['UserID'];
}

require_once(__DIR__ . '../../../database/database.php');


$deletesql = "DELETE FROM cart WHERE cart.UserID = $id";



if($mysqli->query($deletesql)===TRUE){
   echo "xoa thanh cong !";
} else {
  echo "that bai :".$mysqli->error;
}


header("Location: ../thanhdat_listproducts.php");


//ALTER TABLE cart_detail ADD CONSTRAINT fk_cartdetail_products FOREIGN KEY(ProductID) REFERENCES products(ProductID);
// ALTER TABLE cart ADD CONSTRAINT fk_cart_cartdetail FOREIGN KEY(id_cart_detail) REFERENCES cart_detail(id_cart_detail);