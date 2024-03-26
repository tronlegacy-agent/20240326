<?php
session_start();
// var_dump($_SESSION['account']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>members_only</title>
</head>

<body>
  <h1>MEMBER ONLY</h1>
  <?php
  // var_dump($_SESSION);
  if (isset($_SESSION['valid_user'])) {
    echo '<p> YOU ARE LOGGED IN AS ' . $_SESSION['valid_user'] . '</p>';
    echo '<p><em>MEMBER-ONLY CONTENT GOES HERE.</em></p>';
  } else {
    echo '<p>YOU ARE NOT LOGGED IN</p>';
    echo '<p>ONLY LOGGED IN MEMBERS CAN SEE THIS PAGE.</p>';
  }
  //dbconn
  // var_dump( $_POST['account']);
  // var_dump($_POST['password']);
  if (isset($_POST['account']) && isset($_POST['password'])) {
    //登入時
    // echo 123;
    $account = $_POST['account'];
    $password = $_POST['password'];
    echo $account."<br>";
    echo $password."<br>";
    //連線 db 進入
    // $db_host = "localhost";
    // $db_username = "root";
    // $db_password = "";
    // $database = "auth";

    $db_conn = new mysqli("localhost", "root", "", "auth");

    if (mysqli_connect_errno()) //回傳 最後一次連線程式碼錯誤
    {
      echo 'connection to database failed:' . mysqli_connect_error(); //回傳連線錯誤
      exit();
    }

    $query = "select * from user where account='$account' and password='$password'";

    $result = mysqli_query($db_conn, $query);
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
    if ($row) {
      //如果他們是在資料庫中註冊使用者id
      $_SESSION['valid_user'] = $row['account'];
    }
    $db_conn->close();
  }
  ?>
  <p><a href="./authmain.php">BACK TO HOME PAGE</a></p>
</body>

</html>