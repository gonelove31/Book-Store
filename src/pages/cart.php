<?php
include("../auth/auth_user.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="https://upload.wikimedia.org/wikipedia/commons/4/45/IOS_14_Logo.png">
  <title>Cart Page</title>
</head>

<body>

  <h1>Đây là trang CART</h1>
  <p>Hey, <?php echo $_SESSION['email']; ?>!</p>
  <p><a href="./logout.php">Logout</a></p>

  <?php
  include "../includes/footer.php";
  ?>
</body>

</html>