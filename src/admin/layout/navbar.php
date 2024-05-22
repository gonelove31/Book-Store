<div class="sidebar min-h-screen basis-[250px] w-[234px] px-[8px] bg-[#343a40]">
  <div class="user-panel flex pb-4 my-4 gap-[10px]">
    <div class="image w-[40px] rounded-full flex items-center justify-center overflow-hidden">
      <a href="dung_admin.php"><img class="block w-full" src="../assets/img/Nhom_14_Logo.png" alt="Nhóm 14" /></a>

    </div>
    <div class="p-[5px] pb-0 pt-[8px]">
      <span class="text-[#c2c7d0] hover:text-[#fff]">
        <a href="dung_admin.php">ADMIN PAGE</a>
      </span>
    </div>
  </div>
  <!-- Input Search -->
  <div class="search max-w-full flex flex-nowrap">
    <input class="block max-w-[182px] text-white outline-none border border-gray-400 border-solid border-r-0 caret-white rounded-l-lg px-[12px] py-[5px] bg-[#3f474e]" type="text" placeholder="Search" />
    <div class="basis-[40px] border border-gray-400 border-solid rounded-r-lg flex items-center justify-center overflow-hidden">
      <button class="flex px-[10px] py-[9px] items-center justify-center overflow-hidden cursor-pointer" type="button">
        <i class="block w-[16px] h-[16px] text-white fa-solid fa-magnifying-glass"></i>
      </button>
    </div>
  </div>
  <!-- Bottom slidebar -->
  <nav class="mt-2 flex flex-col justify-between">
    <!-- Dashboard -->
    <!-- dung -->
    <ul class="feature flex flex-col">
      <li class="nav-item flex w-full">
        <a href="./dung_admin.php" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
          <i class="nav-icon fas fa-house" aria-hidden="true"></i>
          <p>
            Dashboard
            <!-- <i class="right fas fa-angle-right"></i> -->
          </p>
        </a>
      </li>

      <!-- 1. Quản lý người dùng -->
      <li class="nav-item flex w-full  flex-col">
        <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
          <i class="fa-solid fa-users-gear"></i>
          <p>
            Quản lý người dùng
            <!-- <i class="right fas fa-angle-right"></i> -->
          </p>
        </a>

        <!-- UL CHỨC NĂNG QUẢN LÝ NGƯỜI DÙNG -->
        <ul class="nav nav-treeview" style="display: block;">
          <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
            <a href="./dung_user_list.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách người dùng</p>
              <!-- GET ALL PRODUCTS -->
            </a>
          </li>
        </ul>
      </li>

      <!-- Cuong  -->
      <!-- 2. Quản lý danh mục -->
      <li class="nav-item flex w-full  flex-col">
        <a class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
          <i class="nav-icon fas fa-th" aria-hidden="true"></i>
          <p>
            Quản lý danh mục
            <!-- <i class="right fas fa-angle-right"></i> -->
          </p>
        </a>
        <ul class="nav nav-treeview" style="display: block;">
          <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
            <a href="./cuong_CategoryList.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
              <i class="far fa-circle nav-icon"></i>
              <p>Tất cả danh mục</p>
            </a>
          </li>
          <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
            <a href="./cuong_AddCategory.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm danh mục</p>
            </a>
          </li>
        </ul>
      </li>
      <!-- 3. Quản lý sản phẩm -->
      <li class="nav-item flex w-full  flex-col">
        <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
          <i class="nav-icon fas fa-copy" aria-hidden="true"></i>
          <p>
            Quản lý sản phẩm
            <!-- <i class="right fas fa-angle-right"></i> -->
          </p>
        </a>

        <!-- 4.1.  -->
        <ul class="nav nav-treeview" style="display: block;">
          <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
            <a href="./dao_readAllProducts.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
              <i class="far fa-circle nav-icon"></i>
              <p>Tất cả sản phẩm</p>
            </a>
          </li>
          <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
            <a href="./dao_addProducts.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm sản phẩm</p>
            </a>
          </li>


        </ul>
      </li>
      <!-- 4. Quản lý đơn hàng -->
      <li class="nav-item flex w-full  flex-col">
            <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
              <i class="nav-icon fas fa-copy" aria-hidden="true"></i>
              <p>
                Quản lý đơn hàng
                <!-- <i class="right fas fa-angle-right"></i> -->
              </p>
            </a>

            <!-- 4.1.  -->
            <ul class="nav nav-treeview" style="display: block;">
              <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                <a href="./thanhdat_listproducts.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tất cả đơn hàng </p>
                </a>
              </li>
      <!-- 5.Quản lý voucher -->
      <li class="nav-item flex w-full  flex-col">
                        <a href="#" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                            <i class="nav-icon fas fa-copy" aria-hidden="true"></i>
                            <p>
                                Quản lý Voucher
                                <!-- <i class="right fas fa-angle-right"></i> -->
                            </p>
                        </a>

                        <!-- 4.1.  -->
                        <ul class="nav nav-treeview" style="display: block;">
                            <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                                <a href="../../../src/admin/trungdat_voucherList.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tất cả Voucher</p>
                                </a>
                            </li>
                            <li class="nav-item w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
                                <a href="../../../src/admin/trungdat_voucherAdd.php" class="nav-link flex items-center justify-center gap-[10px] pl-4">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Thêm Voucher</p>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>
    </ul>
    <ul class="logout">
      <li class="nav-item flex w-full mb-[5px]">
        <a href="../pages/logout.php" class="nav-link w-full rounded-md flex gap-2 px-[16px] py-[8px] text-[#c2c7d0] items-center hover:bg-[#494e53]">
          <i class="nav-icon fa-solid fa-right-from-bracket"></i>
          <p>
            Đăng xuất
            <!-- <i class="right fas fa-angle-right"></i> -->
          </p>
        </a>
      </li>
    </ul>
  </nav>
</div>