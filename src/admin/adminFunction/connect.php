<?php
// const _HOST = 'localhost';
// const _DB = 'group14_tikibook';
// const _USER = 'root';
// const _PASS = '';


// try {
//     if (class_exists('PDO')) {
//         $dsn = 'mysql:dbname=' . _DB . ';host=' . _HOST;

//         $option = [
//             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',        // tieng viet
//             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION             // tao thong bao ngoai le khi gap
//         ];

//         $mysqli = new PDO($dsn, _USER, _PASS, $option);
//         var_dump($mysqli);                                            //kiem tra khoi tao PDO thanh cong 
//     }
// } catch (Exception $exception) {
//     echo '<div style="color:red;">';
//     echo $exception->getMessage() . '<br>';
//     echo '</div>';
//     die();
// }

$mysqli = new mysqli("localhost", "root", "", "db_nhom14");
