<?php
if (isset($_GET['UserID'])) {
  $UserID = $_GET['UserID'];
  include("./user.controller.php");
  include '../database/database.php';

  $userList = getUserList($mysqli);
  $userToUpdate = null;

  foreach ($userList as $user) {
    if ($user['UserID'] == $UserID) {
      $userToUpdate = $user;
      break;
    }
  }

  // var_dump($userToUpdate);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $userToUpdate) {
  $userName = $_POST['UserName'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = $_POST['isAdmin'];

  $userToUpdate['role'] = $role;

  $query = "UPDATE users SET UserName=?, phone=?, address=?, email=?, password=?, role=? WHERE UserID=?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("sssssis", $userName, $phone, $address, $email, $password, $role, $UserID);

  // echo "SQL statement: " . $userToUpdate['role'];

  if ($stmt->execute()) {
    header("Location: user_list.php");
    exit();
  } else {
    echo "Có lỗi xảy ra khi cập nhật thông tin";
    var_dump($userToUpdate);
  }

  $stmt->close();
}

?>

<?php if ($userToUpdate) { ?>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/Nhom_14_Logo.png">
    <!-- CDN font-awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CDN tailwind  -->
    <!-- <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../assets/css/tippyCustom.css" /> -->
    <title>Update User</title>
  </head>

  <body>
    <h1>Sửa thông tin của user <?php echo $userToUpdate['UserName']; ?></h1>
    <form method="POST">
      <table>
        <tr>
          <td><label for="user-name">User Name:</label></td>
          <td><input type="text" id="user-name" name="UserName" required value="<?php echo $userToUpdate['UserName']; ?>"></td>
        </tr>
        <tr>
          <td><label for="phone">Phone:</label></td>
          <td><input type="tel" id="phone" name="phone" required value="<?php echo $userToUpdate['phone']; ?>"></td>
        </tr>
        <tr>
          <td><label for="address">Address:</label></td>
          <td><input type="text" id="address" name="address" required value="<?php echo $userToUpdate['address']; ?>"></td>
        </tr>
        <tr>
          <td><label for="email">Email:</label></td>
          <td><input type="email" id="email" name="email" required value="<?php echo $userToUpdate['email']; ?>"></td>
        </tr>
        <tr>
          <td><label for="password">Password:</label></td>
          <td><input type="text" id="password" name="password" required value="<?php echo $userToUpdate['password']; ?>"></td>
        </tr>
        <tr>
          <td><label for="is-admin">Phân quyền:</label></td>
          <td>
            <select id="is-admin" name="isAdmin">
              <option value="1" <?php echo ($userToUpdate['role'] == 1) ? 'selected' : ''; ?>>Admin</option>
              <option value="0" <?php echo ($userToUpdate['role'] == 0) ? 'selected' : ''; ?>>User</option>
            </select>
          </td>
        </tr>
      </table>
      <button type="submit">Sửa</button>
    </form>
  </body>

<?php } else {
  echo "User không tồn tại";
  var_dump($userToUpdate);
}
?>