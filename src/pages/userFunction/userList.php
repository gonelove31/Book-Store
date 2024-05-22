<?php
include("../database/database.php"); 
include("./../utils/utils.php"); 

$UserID=$_GET["UserID"];

$sql = "SELECT Image, ProductName, Price, OldPrice, CartID, cart.ProductID, SoLuongMua  FROM cart INNER JOIN products ON cart.ProductID = products.ProductID WHERE UserID = $UserID ";
$result = $mysqli->query($sql);

// xoa don hang
if (isset($_POST["CartID"])) {
    $cartid = $_POST["CartID"];
    $delete = "DELETE FROM cart WHERE CartID = $cartid";
    $result1 = $mysqli->query($delete);
    header("Refresh:0");
    // $row = $result->fetch_assoc();
}

?>


<?php
$i = -1;
while ($row = $result->fetch_assoc()) {
    $i++;
?>

    <!-- Check box -->
    <div class="w-full flex items-center px-[16px] py-[9px] gap bg-white rounded-md ">
        <!-- <div class="w-[5%] h-[21px] flex items-center ">
                <input type="submit" value="" name="CartCode" id="" class="bg-cyan-400 w-[18px] h-[18px] font-thin mr-3 cursor-pointer">
            </div> -->

        <!-- Ten san pham -->
        <div class="w-[35%] h-32 flex">
            <div class="w-[50%] flex justify-center items-center">
                <img src="../../../Uploads/<?php echo $row["Image"] ?>" alt="" class="block w-[140px] h-[125px]">
            </div>
            <a href="" class="text-[14px] flex items-center hover:text-blue-700">
                <?php echo $row["ProductName"] ?>
            </a>
        </div>

        <!-- Don gia -->
        <div class="text-[14px] w-[20%] leading-5 flex items-center gap-[5px]">
            <div class="font-medium ">
                <span id="price_<?php echo $row["CartID"] ?>"><?php echo $row["Price"] * 1000 ?></span>
            </div>
            <div class="text-gray-500 font-light text-xs">
                <span><s><?php echo $row["OldPrice"] * 1000 ?> <u>đ</u></s></span>
            </div>
        </div>

        <!-- So luong -->
        <div class="product text-[14px] w-[15%] flex">
            <button type="button" data-product-id="<?php echo $row["CartID"] ?>" class="decrease-button border-gray-300 rounded-tl-[3px] rounded-bl-[3px] overflow-hidden border-[1px] cursor-pointer">
                <img class="block" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/decrease.svg" alt="decrease">
            </button>
            <input  name="soluong-<?php echo $i ?>" data-product-id="<?php echo $row["CartID"] ?>"   class="number-input w-[32px] text-center border-gray-300 border-y-[1px]" type="tel" class="qty-input" value="<?php echo $row["SoLuongMua"] ?> " min="1">
            <input type="hidden" name="soluong-<?php echo $row["CartID"] ?>" class="" type="tel">
            <button type="button" data-product-id="<?php echo $row["CartID"] ?>" class="increase-button border-gray-300 rounded-tr-[3px] rounded-br-[3px] overflow-hidden border-[1px] cursor-pointer">
                <img class="block" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/increase.svg" alt="increase">
            </button>

        </div>

        <!-- Thanh tien -->
        <div class="text-[14px] w-[15%]">
            <span class="text-red-400 font-medium ">
                <span class="product-price" data-product-id="<?php echo $row["CartID"] ?>">
                    <?php echo ($row["Price"] * $row["SoLuongMua"]) * 1000 ?>
                </span>
        </div>

        <!-- Thung rac -->
        <button class="w-[10%] flex justify-end" type="submit" value="<?php echo $row["CartID"] ?>" name="CartID">
            <!-- <input type="submit" name="" > -->
            <svg class="w-[17px] h-[17px] text-gray-400 dark:text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
            </svg>
        </button>

    </div>

<?php
}
?>




<script>
    document.addEventListener("DOMContentLoaded", function() {
        var decreaseButtons = document.querySelectorAll(".decrease-button");
        var increaseButtons = document.querySelectorAll(".increase-button");
        var numberInputs = document.querySelectorAll(".number-input");
        var productPrices = document.querySelectorAll(".product-price");

        decreaseButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var productId = this.getAttribute("data-product-id");
                var numberInput = document.querySelector(`.number-input[data-product-id="${productId}"]`);
                var currentValue = parseInt(numberInput.value);
                numberInput.value = currentValue - 1;

                updateProductPrice(productId, currentValue - 1);
            });
        });

        increaseButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var productId = this.getAttribute("data-product-id");
                var numberInput = document.querySelector(`.number-input[data-product-id="${productId}"]`);
                var currentValue = parseInt(numberInput.value);
                numberInput.value = currentValue + 1;

                updateProductPrice(productId, currentValue + 1);
            });
        });

        function updateProductPrice(productId, quantity) {
            // console.log(productId);

            var Price = Number(document.getElementById(`price_${productId}`).innerHTML);
            var totalPrice = Price * quantity;
            // console.log(Price);
            // console.log(quantity);
            // Tìm phần tử hiển thị giá tiền tương ứng và cập nhật nội dung
            var productPriceElement = document.querySelector(`.product-price[data-product-id="${productId}"]`);
            productPriceElement.innerHTML = `${totalPrice}`;

            var PrePrice = document.querySelector('#prePrice');
            var FinalPrice = document.querySelector('#finalCost');
            PrePrice.innerHTML = sumProductPrice();
            FinalPrice.innerHTML = sumProductPrice();
        }

        function sumProductPrice() {
            var productPrices = document.querySelectorAll(".product-price");
            var sum = 0;
            productPrices.forEach(function(item) {
                var currentPrice = Number(item.innerHTML);
                sum += currentPrice;
                // console.log('hien tai', currentPrice);
            });

            return sum;
        }
        var PrePrice = document.querySelector('#prePrice');
        var TotalPrice = document.querySelector('#finalCost');
        TotalPrice.innerHTML = sumProductPrice();
        PrePrice.innerHTML = sumProductPrice();

    });
</script>