<?php
require "../database/database.php";
function showAlert($message)
{
  echo "<script type='text/javascript'>alert('$message');</script>";
}
function autoLogoutAfterInactivity($timeoutInSeconds, $redirectURL)
{
  if (!isset($_SESSION["last_activity"])) {
    $_SESSION["last_activity"] = time();
  }

  if ((time() - $_SESSION["last_activity"]) > $timeoutInSeconds) {
    session_unset();
    session_destroy();
    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600, '/');
    }
    header("Location: ../pages/$redirectURL");
    exit();
  }

  $_SESSION["last_activity"] = time();
}
// Kiểm tra để đảm bảo email duy nhất
function isEmailExist($mysqli, $email)
{
  $query = "SELECT COUNT(*) as total FROM users WHERE email = ?";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row['total'] > 0;
}

function insertUserData($mysqli, $UserName, $address, $phone, $email, $password)
{
  $query = "INSERT INTO users(UserName, email,phone,address, password) VALUES (?,?,?,?,?);";
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param("sssss", $UserName, $email, $phone, $address, $password);

  return $stmt->execute();
}

// Function to authenticate user credentials
function Authentication($mysqli, $email, $password)
{
  $query = "SELECT * FROM `users` WHERE email=? AND password=?";
  $stmt = executePreparedStatement($mysqli, $query, "ss", $email, $password);
  $result = $stmt->get_result();
  return $result->num_rows === 1;
}

// Function to set user session after successful authentication
function Authorization($mysqli, $email)
{
  $query = "SELECT UserID, UserName, role FROM `users` WHERE email=?";
  $stmt = executePreparedStatement($mysqli, $query, "s", $email);
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $_SESSION['email'] = $email;
  $_SESSION['UserID'] = $row['UserID'];
  $_SESSION['UserName'] = $row['UserName'];
  $_SESSION['role'] = $row['role'];
}

// Function to check access role and redirect if necessary
function checkAccessRole($requiredRole)
{
  if (!isset($_SESSION["email"])) {
    header("Location: ../pages/login.php");
    exit();
  }
  $email = $_SESSION["email"];
  require '../database/database.php';
  $query = "SELECT role FROM users WHERE email=?";
  $stmt = executePreparedStatement($mysqli, $query, "s", $email);
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();

  if ($user["role"] != $requiredRole) {
    unsetUserSession();
    header("Location: ../pages/login.php");
    exit();
  }
}

// Function to unset and destroy user session
function unsetUserSession()
{
  $_SESSION = array();
  session_destroy();
  if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
  }
}


// Function to get entity ID from the database
function getEntityID($mysqli, $table, $columnName, $value)
{
  $query = "SELECT {$table}ID FROM {$table} WHERE {$columnName}=?";
  $stmt = executePreparedStatement($mysqli, $query, "s", $value);
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  return $row["{$table}ID"];
}

// Function to execute prepared statement and return the statement
function executePreparedStatement($mysqli, $query, $types, ...$params)
{
  $stmt = $mysqli->prepare($query);
  $stmt->bind_param($types, ...$params);
  $stmt->execute();
  return $stmt;
}



function discount($price, $oldPrice)
{
  $a = $oldPrice - $price;
  $discount = ($a / $oldPrice) * 100;
  return round($discount);
}

function convertMoney($money)
{
  if ($money >= 1000 && is_numeric($money)) {
    $formattedNumber = number_format($money, 0, '.', '.');
    return $formattedNumber;
  }
  return $money . ".000đ";
}

function convertSoldOut($soldOutCount)
{
  if ($soldOutCount >= 1000 && is_numeric($soldOutCount)) {

    return round($soldOutCount / 1000, 1) . 'k';
  }

  return $soldOutCount;
}

function handleQuerySQL($page)
{
  $booktypeid = isset($_GET["booktypeid"]) ? $_GET["booktypeid"] : null;
  $ShopID = isset($_GET["ShopID"]) ? $_GET["ShopID"] : null;
  $minPrice = isset($_GET["minPrice"]) ? $_GET["minPrice"] : null;
  $maxPrice = isset($_GET["maxPrice"]) ? $_GET["maxPrice"] : null;
  $star = isset($_GET["star"]) ? $_GET["star"] : null;
  $q = isset($_GET["q"]) ? $_GET["q"] : null;
  $sql = "select * from products ";

  if (!is_null($q) || !is_null($booktypeid) || !is_null($ShopID) || !is_null($maxPrice) || !is_null($minPrice) || !is_null($star)) $sql .= " where ";

  if (!is_null($q)) $sql .= "ProductName like '%$q%' ";
  if (!is_null($booktypeid)) {
    if (!is_null($q)) {

      $sql .= " and BookTypeID = $booktypeid ";
    } else  $sql .= "BookTypeID = $booktypeid ";
  }
  if (!is_null($ShopID)) {
    if (!is_null($booktypeid) || !is_null($q))  $sql .= "and ShopID = $ShopID ";
    else  $sql .= " ShopID = $ShopID ";
  }
  if (!is_null($maxPrice) || !is_null($minPrice)) {
    if (!is_null($ShopID) || !is_null($booktypeid) || !is_null($q)) {
      if (is_null($minPrice)) $sql .= " and Price < $maxPrice ";
      else $sql .= "and Price between $minPrice and $maxPrice ";
    } else $sql .= " Price between $minPrice and $maxPrice ";
  }
  if (!is_null($star)) {
    if (!is_null($ShopID) || !is_null($booktypeid) || !is_null($maxPrice) || !is_null($minPrice) || !is_null($q)) {
      $sql .= " and Star >= $star ";
    } else {
      $sql .= " Star >= $star ";
    }
  }
  if (!is_null($page)) {
    $dongbatdau = 8 * ($page - 1);
    $sql .=  "  LIMIT $dongbatdau , 8";
  }


  return $sql;
}
