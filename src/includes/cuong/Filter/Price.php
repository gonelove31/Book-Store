<div class="border-b-[1px] border-b-[#ebebf0] border-b-solid px-4 py-3">
    <h4 class="text-[14px] font-medium pb-3">Giá</h4>


    <!-- chọn khoảng giá -->

    <div>
        <form class="text-gray-600 text-xs pb-2 mt-1">
            <span class="mt-2 pb-2 block">Chọn khoảng giá</span>
            <?php
            $q = isset($_GET["q"]) ? $_GET["q"] : null;
            if ($q) {
                echo "<input type=\"hidden\" name=\"q\" value=\"$q\">";
            }
            $bookTypeId = isset($_GET["booktypeid"]) ? $_GET["booktypeid"] : null;
            if ($bookTypeId) {
                echo "<input type=\"hidden\" name=\"booktypeid\" value=\"$bookTypeId\">";
            }
            $ShopID = isset($_GET["ShopID"]) ? $_GET["ShopID"] : null;
            if ($ShopID) {
                echo "<input type=\"hidden\" name=\"ShopID\" value=\"$ShopID\">";
            }
            $star = isset($_GET["star"]) ? $_GET["star"] : null;
            if ($star) {
                echo "<input type=\"hidden\" name=\"star\" value=\"$star\">";
            }
            ?>
            <div class="flex items-center gap-1">
                <input pattern="[0-9]*" name="minPrice" value="0" class="w-20 h-8 bg-white rounded text-left outline-none text-xs flex-1 border border-gray-400 px-2" />
                <span>-</span>
                <input pattern="[0-9]*" name="maxPrice" value="0" class="w-20 h-8 bg-white rounded text-left outline-none text-xs flex-1 border border-gray-400 px-2" />
            </div>
            <button type="submit" class="bg-white border border-blue-500 text-xs text-blue-500 w-full mt-[8px] rounded-md px-2 py-2">
                Áp dụng
            </button>
        </form>
    </div>
</div>