<!-- user.controller.php -->
<?php
require "../auth/auth_admin.php";
require "../database/database.php";

// Function to get a list of all users
function getUserList($mysqli)
{
  $query = "SELECT * FROM users";
  $stmt = $mysqli->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();
  $userList = array();

  while ($row = $result->fetch_assoc()) {
    $userList[] = $row;
  }

  return $userList;
}

function getDataForDashboard($mysqli, $table)
{
  $query = "SELECT COUNT(*) AS row_count FROM $table"; // Sử dụng AS để đặt tên cho cột tính tổng số hàng
  $stmt = $mysqli->prepare($query);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $row = $result->fetch_assoc()) {
    return $row['row_count']; // Trả về số hàng từ cột đã đặt tên
  } else {
    return 0; // Trả về 0 nếu có lỗi hoặc không có dữ liệu
  }
}


// Function to delete a user by userID
function deleteUser($userID, $mysqli)
{
  $query = "DELETE FROM users WHERE UserID = ?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $stmt->close();
}

// Delete user if userID is provided in GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['userID'])) {
  $userID = $_GET['userID'];

  echo $userID;

  deleteUser($userID, $mysqli);

  echo $userID;

  header('Location: dung_user_list.php');
  exit;
}


?>