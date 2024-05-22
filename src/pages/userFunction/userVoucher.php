<div class="radius-md mb-3 p-4 bg-white rounded-md">
    <!-- Khuyến mãi -->
    <div class="flex justify-between items-center mb-6 leading-5 text-[14px] ">
        <div class="font-medium   capitalize ">
            Tiki Khuyến Mãi
        </div>

        <div class="flex items-center capitalize">
            <span class="text-gray-400">Có thể chọn</span>
            <svg class="ml-1 cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" class="info-icon" background="#ffffff" aria-describedby="popup-1">
                <path d="M12.75 11.25C12.75 10.8358 12.4142 10.5 12 10.5C11.5858 10.5 11.25 10.8358 11.25 11.25V15.75C11.25 16.1642 11.5858 16.5 12 16.5C12.4142 16.5 12.75 16.1642 12.75 15.75V11.25Z" fill="#787878"></path>
                <path d="M12.75 8.25C12.75 8.66421 12.4142 9 12 9C11.5858 9 11.25 8.66421 11.25 8.25C11.25 7.83579 11.5858 7.5 12 7.5C12.4142 7.5 12.75 7.83579 12.75 8.25Z" fill="#787878"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM4.5 12C4.5 7.85786 7.85786 4.5 12 4.5C16.1421 4.5 19.5 7.85786 19.5 12C19.5 16.1421 16.1421 19.5 12 19.5C7.85786 19.5 4.5 16.1421 4.5 12Z" fill="#787878"></path>
            </svg>
        </div>
    </div>

    <!-- Chọn Mã  -->
    <div class="flex justify-between gap-3">
        <div class="relative mb-6 flex w-full h-[40px]">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.2803 14.7803L14.7803 10.2803C15.0732 9.98744 15.0732 9.51256 14.7803 9.21967C14.4874 8.92678 14.0126 8.92678 13.7197 9.21967L9.21967 13.7197C8.92678 14.0126 8.92678 14.4874 9.21967 14.7803C9.51256 15.0732 9.98744 15.0732 10.2803 14.7803Z" fill="#0B74E5"></path>
                    <path d="M10.125 10.5C10.7463 10.5 11.25 9.99632 11.25 9.375C11.25 8.75368 10.7463 8.25 10.125 8.25C9.50368 8.25 9 8.75368 9 9.375C9 9.99632 9.50368 10.5 10.125 10.5Z" fill="#0B74E5"></path>
                    <path d="M15 14.625C15 15.2463 14.4963 15.75 13.875 15.75C13.2537 15.75 12.75 15.2463 12.75 14.625C12.75 14.0037 13.2537 13.5 13.875 13.5C14.4963 13.5 15 14.0037 15 14.625Z" fill="#0B74E5"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25C3.33579 5.25 3 5.58579 3 6V9.75C3 10.1642 3.33579 10.5 3.75 10.5C4.61079 10.5 5.25 11.1392 5.25 12C5.25 12.8608 4.61079 13.5 3.75 13.5C3.33579 13.5 3 13.8358 3 14.25V18C3 18.4142 3.33579 18.75 3.75 18.75H20.25C20.6642 18.75 21 18.4142 21 18V14.25C21 13.8358 20.6642 13.5 20.25 13.5C19.3892 13.5 18.75 12.8608 18.75 12C18.75 11.1392 19.3892 10.5 20.25 10.5C20.6642 10.5 21 10.1642 21 9.75V6C21 5.58579 20.6642 5.25 20.25 5.25H3.75ZM4.5 9.08983V6.75H19.5V9.08983C18.1882 9.41265 17.25 10.5709 17.25 12C17.25 13.4291 18.1882 14.5874 19.5 14.9102V17.25H4.5V14.9102C5.81181 14.5874 6.75 13.4291 6.75 12C6.75 10.5709 5.81181 9.41265 4.5 9.08983Z" fill="#0B74E5"></path>
                </svg>
            </div>
            <input type="text" name="VoucherCode" id="input-group-1" class="bg-gray-50 w-full outline-none border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nhập mã giảm giá ">
        </div>

        <button type="button" id="btn" class="text-white h-[40px] w-[90px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Áp
            dụng</button>

    </div>
    <span id="thongBaoThanhCong" class="text-[green] text-[11px]"> </span>
    <!-- <span id="thongBaoThatBai" class="text-[red] text-[11px]"></span> -->
    <!-- thong bao voucher -->


</div>

<script>
     var myElement = document.getElementById("submitPay");

// Thêm thuộc tính bằng setAttribute()
var myinput_userid=document.getElementById("userid");

value=myinput_userid.value;
    var VoucherCode1;
    
    myElement.setAttribute("href", `./thanhdat_index.php?VoucherCode=0&UserID=${value}`);
    $(document).ready(function() {
        jQuery("#btn").click(function() {
            var data_input = $("input[name='VoucherCode']").val();
            console.log(value);
            $.ajax({
                url: './userFunction/annouce.php',
                type: 'POST',
                data: {
                    value: data_input,
                },
                dataType: 'json',
                success: function(respone, status) {
                    
                    var thongbao = respone.value1;
                    var giamgia = respone.value2;
                    
                     VoucherCode1=respone.value3;
                    $('#thongBaoThanhCong').html(thongbao);
                    $('#discount').html(giamgia);
                    var prePrice = Number(document.getElementById("prePrice").innerHTML);
                    var discount = Number(document.getElementById("discount").innerHTML);
                    var cost = prePrice - (prePrice * discount / 100);
                    var finalCost = document.getElementById('finalCost');
                    // // console.log(finalCost);
                    
                    finalCost.innerHTML = cost;
                    
   

if(VoucherCode1){
myElement.setAttribute("href", `./thanhdat_index.php?VoucherCode=${VoucherCode1}&UserID=${value}`);
console.log(myElement,"ok");
    } 
        
    
                },
                error: function(e,status) {
                    console.log(e);
                    console.log("loi")
                    console.log(e.message);
                }
            });
 

        });
    
    });
 
</script>