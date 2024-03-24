<?php
session_start();

if(isset($_POST['userid']) && isset($_POST['password']))
{
  //登入時
  $userid = $_POST['userid'];
  $password = $_POST['password'];
  //連線 db 進入
  // $db_host = "localhost";
  // $db_useranme = "root";
  // $db_password = "";
  // $database = "auth";
  $db_conn = new mysqli("localhost","root","","auth");

  if(mysqli_connect_errno())//回傳 最後一次連線程式碼錯誤
  {
    echo 'connection to database failed:'.mysqli_connect_error();//回傳連線錯誤
    exit();
  }

  $query = "select * from authorized_users where name='".$userid."' and password=shal('".$password."')";

  $result = $db_conn->query($query);
  if($result->num_rows > 0)
  {
    //如果他們是在資料庫中註冊使用者id
    $_SESSION['vaild_user'] = $userid;
  }
  $db_conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>homepage</title>
</head>
<body>
  <h1>HOME PAGE</h1>
  <?php
    if(isset($_SESSION['vaild_user']))
    {
      echo '<p> YOU ARE LOGIN AS : '.$_SESSION['vaild_user'].'<br />';
      echo '<a href="logout.php">LOGOUT<a/></p>';
    }else{
      if(isset($userid))
      {
        //如果他們嘗試登入失敗
        echo '<p>COULD NOT LOG YOU IN.</p>';
      }else{
        //他們未嘗試登入
        echo '<p>YOU ARE NOT LOG IN.</p>';
      }

      //提供表單登入
      echo '<form action="members_only.php" method="post">';
      echo '<fieldset>';
      echo '<legend>LOGIN NOW!</legend>';
      echo '<p><label for="userid">USERID:</label>';
      echo '<input type="text" ee="userid" id="userid" size="30"/></p>';
      echo '<p><label for="password">PASSWORD:</label>';
      echo '<input type="password" name="password" id="password" size="30"/></p>';
      echo '<fieldset>';
      echo '<button type="submit" name="login">LOGIN</button>';
      echo '<form/>';
    }
  ?>
  <p><a href="./members_only.php">GO TO MEMBERS SECTION</a></p>
</body>
<style type="text/css">
  fieldset{
    width: 50%;
    border:2px solid #ff0000;
  }
  legend{
    font-weight: bold;
    font-size: 50%;
  }
  label{
    width: 125px;
    float:left;
    text-align: left;
    font-weight: bold;
  }
  input{
    border: 1px solid #000;
    padding: 3px;
  }
  button{
    margin-top: 12px;
  }
</style>
</html>