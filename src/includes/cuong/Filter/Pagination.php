<?php
$items_per_page = 8;
$page = isset($_GET["page"]) ? $_GET["page"] : 1;

$sql = handleQuerySQL(null);
$query3 = mysqli_query($mysqli, $sql);
$number_of_result = mysqli_num_rows($query3);

$number_of_page = ceil($number_of_result / $items_per_page);
$q = isset($_GET["q"]) ? $_GET["q"] : null;
if (!is_null($q)) {
  $param .= "&q=$q";
}

?>


<!-- pagination -->
<div class="flex justify-center mt-[70px] mb-[20px]">
  <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">

    <!-- <?php
          if ($page <= 1) {
            echo "
        <a href=\"#\" class=\"relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0\">
          <span class=\"sr-only\">Previous</span>
          <svg class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
            <path fill-rule=\"evenodd\" d=\"M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z\" clip-rule=\"evenodd\" />
          </svg>
        </a>";
          } else {
            echo "
        <a href=\"#\" class=\"relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0\">
          <span class=\"sr-only\">Previous</span>
          <svg class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
            <path fill-rule=\"evenodd\" d=\"M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z\" clip-rule=\"evenodd\" />
          </svg>
        </a>";
          }
          ?> -->

    <a <?php echo ((int)$page >  1) ?  "href=" . "index.php?page=" . $page - 1 . $param  : "" ?> class="relative <?php echo (int)$page <= 1 ? "opacity-40 cursor-not-allowed"  : "" ?> inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
      <span class="sr-only">Previous</span>
      <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
      </svg>
    </a>

    <!-- Current: "z-10 bg-indigo-600 text-white  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
    <?php
    for ($i = 1; $i <= $number_of_page; $i++) {
      if ($i == $page) {
        echo "<a href=\"index.php?page=" . $i . $param . "\" aria-current=\"page\" class=\"relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">$i</a>";
      } else {
        echo "<a href=\"index.php?page=" . $i . $param . "\" class=\"relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0\">$i</a>";
      }
    }
    ?>



    <a <?php echo ((int)$page <  $number_of_page) ?  "href=" . "index.php?page=" . $page + 1 . $param  : "" ?> class="relative <?php echo ((int)$page ==  $number_of_page) ? "opacity-40 cursor-not-allowed"  : "" ?> inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
      <span class="sr-only">Next</span>
      <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
      </svg>
    </a>
  </nav>
</div>