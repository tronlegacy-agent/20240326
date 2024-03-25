<?php
session_start();
// var_dump($_SESSION['userid']);
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
  if (isset($_SESSION['vaild_user'])) {
    echo '<p> YOU ARE LOGGED IN AS ' . $_SESSION['vaild_user'] . '</p>';
    echo '<p><em>MEMBER-ONLY CONTENT GOES HRER.</em></p>';
  } else {
    echo '<p>YOU ARE NOT LOGGED IN</p>';
    echo '<p>ONLY LOGGED IN MEMBERS CAN SEE THIS PAGE.</p>';
  }
  //dbconn
  if (isset($_POST['userid']) && isset($_POST['password'])) {
    //登入時
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    //連線 db 進入
    // $db_host = "localhost";
    // $db_useranme = "root";
    // $db_password = "";
    // $database = "auth";
    
    $db_conn = new mysqli("localhost", "root", "", "auth");

    if (mysqli_connect_errno()) //回傳 最後一次連線程式碼錯誤
    {
      echo 'connection to database failed:' . mysqli_connect_error(); //回傳連線錯誤
      exit();
    }

    $query = "select * from authorized_users where name='" . $userid . "' and password=shal('" . $password . "')";

    $result = $db_conn->query($query);
    if ($result->num_rows > 0) {
      //如果他們是在資料庫中註冊使用者id
      $_SESSION['vaild_user'] = $userid;
    }
    $db_conn->close();
  }

  ?>
  <p><a href="./authmain.php">BACK TO HOME PAGE</a></p>
</body>

</html>